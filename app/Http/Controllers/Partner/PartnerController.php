<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Storage;
use Response;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
             if(!$request->session()->has('faUser')){
			return redirect('/');
		}
        
        $userId=$request->session()->get('faUser')->p_id;
      
     $document=DB::table('fa_partner_cv')->where('partner_id',$userId)->first();
            if($request->isMethod('post')){
           
            $data_array=array(
                'availability'=>$request->input('availability'),
                'no_clients'=>$request->input('no_clients'),
                'no_employs'=>$request->input('no_employs'),
                'established'=>$request->input('established'),
                'website'=>$request->input('website'),
                'address'=>$request->input('address'),
                'post_code'=>$request->input('post_code'),
                'city'=>$request->input('city'),
                'phoneno'=>$request->input('phoneno'),
                'company_des'=>$request->input('company_des'),
                'company_info'=>$request->input('company_info'),
                'services'=>json_encode($request->input('services')),
                'interview'=>$request->input('interview'),
                'personal_quets'=>$request->input('personal_quets'),
            );
            
          $update= DB::table('fa_partner')->where('p_id','=',$userId)->where('user_type','partner')->update($data_array);
 //dd($update);
            }
    //dd($userinfo);
        //dd($userId);
         $userinfo = DB::table('fa_partner')->where('p_id','=',$userId)->where('user_type','partner')->first();
         $service=json_decode($userinfo->services);
         $jobs = DB::table('fa_jobpost')->where('status','1')->where('services','=',$service[0])->get();
         $alljobs = DB::table('fa_jobpost')->where('status','1')->orderBy('id','desc')->get();
 //dd($jobs);
     return view('frontend.partner.partner_dashboard',compact('userinfo','document','jobs','alljobs'));
    }

        public function getDocument(Request $request)
        {
         //   dd('hello');
           $userId=$request->session()->get('faUser')->p_id;
           $document=DB::table('fa_partner_cv')->where('partner_id',$userId)->where('type','=','special')->first();

            $filePath = $document->cv;

            // file not found
            if( ! Storage::exists($filePath) ) {
            abort(404);
            }

            $pdfContent = Storage::get($filePath);

            // for pdf, it will be 'application/pdf'
           // $type       = Storage::mimeType($filePath);
            //$fileName   = Storage::name($filePath);

            return Response::make($pdfContent, 200, [
            'Content-Type'        => $type,
            'Content-Disposition' => 'inline; filename="'.$filePath.'"'
            ]);
        }

        public function getDocumentcer(Request $request)
        {
         //   dd('hello');
           $userId=$request->session()->get('faUser')->p_id;
           $document=DB::table('fa_partner_cv')->where('partner_id',$userId)->where('type','=','certification')->first();

            $filePath = $document->cv;

            // file not found
            if( ! Storage::exists($filePath) ) {
            abort(404);
            }

            $pdfContent = Storage::get($filePath);

            // for pdf, it will be 'application/pdf'
           // $type       = Storage::mimeType($filePath);
            //$fileName   = Storage::name($filePath);

            return Response::make($pdfContent, 200, [
            'Content-Type'        => $type,
            'Content-Disposition' => 'inline; filename="'.$filePath.'"'
            ]);
        }

public function accountLogin(Request $request){
        if($request->session()->has('faUser')){
			return redirect('/');
		}
       // dd($request->all());
		$next = $request->input('next');
        // $shopping = $request->input('shopping');
        // $flower = $request->input('flowerSite');
        // $automobile = $request->input('automobileSite');



		if($request->isMethod('post')){
//dd($request->all());
//            $user_type = $request->input('user_type');

       
           $email = $request->input('email');
            $password = md5(trim($request->input('password')));
            

            // /dd($password);

			$user = $this->doLogin($email,$password);
			if($user == 'invalid'){
				$request->session()->flash('loginAlert', 'Invalid Email & Password');
				if($next != ''){
					return redirect('login?next='.$next);
				}else{
					return redirect('login');
				}
			}
			else{

				$request->session()->put('faUser', $user);
				setcookie('cc_data', $user->user_Id, time() + (86400 * 30), "/");

				if($next != ''){
					return redirect($next);
				}else{
					return redirect('partner/partner_dashboard');
				}
			}
 

		}


		$pageType = \Request::segment('1');
		return view('frontend.partner.partner_login',compact('pageType'));
    }

public function doLogin($email,$password){
        /* do login */
        //dd($password);
        $user = DB::table('fa_partner')->where('email','=',$email)->where('password','=',$password)->where('user_type','partner')->first();
       //dd($user);
		// if(count($user) == null){
		// 	return 'invalid';
		// }else{
		// 	return $user;
		// }
        if(empty($user)){
            return 'invalid';
        }else{
            return $user;
        }
		/* end */
	}


    public function accountRegister(Request $request){
        if($request->session()->has('faUser')){
			return redirect('/');
		}

        if($request->isMethod('post')){
          // dd($request->all());
         
			$this->validate($request,[
				'email' => 'required|email|unique:fa_partner,email',
				'name' => 'required|min:2|max:32',
                'phoneno' => 'required|min:2|max:32',
				'phoneno' => 'required|digits_between:10,12',
				'password' => 'required|min:1|max:50',

			],[

				'email.unique' => 'Email must be unique',
				'name.required' => 'Enter Your Name',
				'phoneno.required' =>'Enter Your Mobile Number',
				'password.required' => 'Enter Password',
				'phoneno.digits_between' => 'Phone Number must be contain 10,12 digits',
            ]);
           // $string = rand(1, 1000000);
            $input['email'] = trim($request->input('email'));
            $input['name'] = trim($request->input('name'));
            $input['phoneno'] = trim($request->input('phoneno'));
            $input['user_type'] = 'partner';
            $input['password'] = md5(trim($request->input('password')));
        
           $userId = DB::table('fa_partner')->insertGetId($input);
            setcookie('cc_data', $userId, time() + (86400 * 30), "/");
            $fNotice = 'Please check your mobile for verification code';
			$request->session()->flash('fNotice',$fNotice);
           // return redirect('verify');
            }

		$pageType = \Request::segment('1');
		return view('frontend.partner.partner_login',compact('pageType'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function profilePicture(Request $request){

        if(!$request->ajax()){
			exit('Directory access is forbidden');
        }

		$userinfo=$request->session()->get('faUser');
		if($request->file('logo') != ''){

		$fName = $_FILES['logo']['name'];
		$ext = @end(@explode('.', $fName));
		if(!in_array(strtolower($ext), array('png','jpg','jpeg'))){
			exit('1');
		}

		$user = DB::table('fa_partner')->where('p_id',$userinfo->p_id)->first();

		$image = $request->file('logo');
		$profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/frontend-assets/partner/profile-photos');
        $image->move($destinationPath, $profilePicture);

        	DB::table('fa_partner')->where('p_id',$userinfo->p_id)->update(array('logo' => $profilePicture));
            $user = DB::table('fa_partner')->where('p_id',$userinfo->p_id)->first();
            $request->session()->put('faUser',$user);
            echo url('/frontend-assets/partner/profile-photos/'.$profilePicture);
        }

	}

     public function removeprofilePicture(Request $request){
         $userinfo=$request->session()->get('faUser')->p_id;
            $logo=array(
            'logo'=>''
            );
        $user = DB::table('fa_partner')->where('p_id','=',$userinfo)->where('user_type','partner')->update($logo);
        echo $user;
        }

        public function logout(Request $request){
         Session::flush();
         return redirect('partner_login');
        }

         public function cvupload(Request $request){
             //dd($request->all());
             $userinfo=$request->session()->get('faUser')->p_id;
             if($request->file('cv') != ''){
                $cv = $request->file('cv');
              
               $upload = $request->file('cv')->store('cv');
             

             }
             $type = $request->file('type');
            $document=DB::table('fa_partner_cv')->where('partner_id',$userinfo)->where('type','special')->first();
            if($document){
               DB::table('fa_partner_cv')->where('partner_id','=',$userinfo)->update(array('cv' => $upload));
            }else{

             DB::table('fa_partner_cv')->insert(array('partner_id'=>$userinfo,'cv' => $upload,'type'=>$type));
            }

            return redirect()->back()->with('success', 'File uploaded successfully.');
        }

          public function carupload(Request $request){
             //dd($request->all());
             $userinfo=$request->session()->get('faUser')->p_id;
             if($request->file('cer') != ''){
                $cer = $request->file('cer');
              
               $upload = $request->file('cer')->store('cv');
             

             }
             $type = $request->input('type');
           //  dd($type);
            $document=DB::table('fa_partner_cv')->where('partner_id',$userinfo)->where('type','certification')->first();
            if($document){
               DB::table('fa_partner_cv')->where('partner_id','=',$userinfo)->update(array('cv' => $upload));
            }else{

             DB::table('fa_partner_cv')->insert(array('partner_id'=>$userinfo,'cv' => $upload,'type'=>$type));
            }

            return redirect()->back()->with('success', 'File uploaded successfully.');
        }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
