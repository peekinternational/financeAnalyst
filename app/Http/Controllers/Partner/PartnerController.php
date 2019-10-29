<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Storage;
use Response;
use PDF;
use Mail;

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
                $request->session()->flash('message','Profile save successfully');
                return redirect()->back();
 //dd($update);
 //return view('frontend.partner.thanks');
            }
    //dd($userinfo);
        //dd($userId);
        $jobs=[];
         $userinfo = DB::table('fa_partner')->where('p_id','=',$userId)->where('user_type','partner')->first();
         $service=json_decode($userinfo->services);

         foreach($service as &$ser){
            
            $jobs[] = DB::table('fa_jobpost')->where('status','1')->where('services','=',$ser)->orderBy('id','desc')->get()->toArray();
         }

//dd($jobs);
         
         $alljobs = DB::table('fa_jobpost')->where('status','1')->orderBy('id','desc')->get();

         $rquote = DB::table('fa_jobpost')->select('fa_quote.*','fa_jobpost.services','fa_jobpost.city','fa_jobpost.job_title','fa_jobpost.mobilenumber','fa_jobpost.city','fa_jobpost.job_case','fa_jobpost.job_type')->join('fa_quote','fa_quote.job_id','=','fa_jobpost.id')->where('fa_quote.p_id',$userId)->orderBy('fa_quote.id','desc')->get();
         $pquots = DB::table('fa_jobpost')->select('fa_quote.*','fa_jobpost.services','fa_jobpost.city','fa_jobpost.mobilenumber','fa_jobpost.job_title','fa_jobpost.job_type')->join('fa_quote','fa_quote.job_id','=','fa_jobpost.id')->where('fa_quote.p_id',$userId)->orderBy('fa_quote.id','desc')->get();
         //$quotes=DB::table('fa_quote')->get();
        //dd($alljobs);
      
         foreach($alljobs as &$res)
         {
             $res->quot=DB::table('fa_quote')->where('job_id','=',$res->id)->count();

         }


     return view('frontend.partner.partner_dashboard',compact('userinfo','document','jobs','alljobs','rquote','pquots'));
    }

        public function getDocument(Request $request)
        {
         //   dd('hello');
           $userId=$request->session()->get('faUser')->p_id;
           $document=DB::table('fa_partner_cv')->where('partner_id',$userId)->where('type','=','special')->first();
           //dd($document);
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
            'Content-Type'        => $document->type,
            'Content-Disposition' => 'inline; filename="'.$filePath.'"'
            ]);
        }

        public function getDocumentcer(Request $request)
        {
         //   dd('hello');
           $userId=$request->session()->get('faUser')->p_id;
            //dd($userId);
           $document=DB::table('fa_partner_cv')->where('partner_id',$userId)->where('type','=','certification')->first();
            //dd($document);
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
            'Content-Type'        => $document->type,
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

            $this->validate($request,[
                'email' => 'required',

                'password' => 'required'

            ],[
                'email.required'=>'Enter your valid email',

                'password.required' => 'Enter Password',

            ]);
           $email = $request->input('email');
            $password = md5(trim($request->input('password')));
            

            // /dd($password);

			$user = $this->doLogin($email,$password);
			if($user == 'invalid'){
				$request->session()->flash('message', 'Invalid Email & Password');
				if($next != ''){
					return redirect('login?next='.$next);
				}else{

                    $request->session()->flash('message','please enter valid email or password');
					return redirect('/partner_login');

				}
			}
			else{
              //dd($user);
				$request->session()->put('faUser', $user);
                $user=$request->session()->get('faUser');

				DB::table('fa_partner')->where('p_id',$user->p_id)->update(['status'=>"Active"]);

				setcookie('cc_data', $user->p_id, time() + (86400 * 30), "/");

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
                'email.required'=>'Enter your valid email',
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
         //Session::flush();
            $user=$request->session()->get('faUser');

            DB::table('fa_partner')->where('p_id',$user->p_id)->update(['status'=>"Not_Active"]);
          Session::forget('faUser');
         return redirect('partner_login');
        }

         public function cvupload(Request $request){
             //dd($request->all());
             $userinfo=$request->session()->get('faUser')->p_id;
             if($request->file('cv') != ''){
                $cv = $request->file('cv');
              
               $upload = $request->file('cv')->store('cv');
             

             }
             $type = $request->type;

            $document=DB::table('fa_partner_cv')->where('partner_id',$userinfo)->where('type','special')->first();
            if($document){
               DB::table('fa_partner_cv')->where('partner_id','=',$userinfo)->update(array('cv' => $upload));
            }else{

             DB::table('fa_partner_cv')->insert(array('partner_id'=>$userinfo,'cv' => $upload,'type'=>$type));
            }
             $request->session()->flash('message','File uploaded successfully');
            return redirect()->back();
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
            $request->session()->flash('message','File uploaded successfully');
            return redirect()->back();
        }

public function quote(Request $request)
    {
        $userinfo=$request->session()->get('faUser')->p_id;
         $request->merge(['p_id' => $userinfo]);
        //dd($request->all());
           $job_id=$request->input('job_id');
          $getemail= DB::table('fa_jobpost')->where('id',$job_id)->first();
          $toemail=$getemail->job_email;
        Mail::send('mail.sendmailtocustomer',['u_name' =>$getemail->customer_name,'quote'=>$request->input('quote'),'services'=> $request->input('q_services'),'payment_frquency'=> $request->input('payment_frquency'),'quote_price' => $request->input('quote_price')],
      function ($message) use ($toemail)
      {

        $message->subject('Experlu.com - Welcome To Experlu');
        $message->from('searchbysearchs@gmail.com', 'Experlu');
        $message->to($toemail);
      });

        DB::table('fa_quote')->insert($request->all());


        $request->session()->flash('message','Quote created successfully');
         return redirect()->back();

    }

     public function customerdetail(Request $request,$id)
    {
       $data= DB::table('fa_jobpost')->join('fa_user_template','fa_user_template.job_id','fa_jobpost.id')
        ->join('fa_quote','fa_quote.job_id','fa_jobpost.id')->where('fa_jobpost.id',$id)->first();
        //dd($data);
        return view('frontend.partner.template_detail',compact('data'));
    }

     public function jobdetail(Request $request,$id)
    {
       $data= DB::table('fa_jobpost')->join('fa_user_template','fa_user_template.job_id','fa_jobpost.id')
        ->join('fa_quote','fa_quote.job_id','fa_jobpost.id')->where('fa_jobpost.id',$id)->first();
        //dd($data);
        return view('frontend.partner.job_detail',compact('data'));
    }

public function export_pdf($id)
  {
    // Fetch all customers from database
    //$data = Customer::get();
    // Send data to the view using loadView function of PDF facade
    $data= DB::table('fa_jobpost')->join('fa_user_template','fa_user_template.job_id','fa_jobpost.id')
        ->join('fa_quote','fa_quote.job_id','fa_jobpost.id')->where('fa_jobpost.id',$id)->first();
       // dd($data);
    $pdf = PDF::loadView('casedetail',compact('data'));
    
    return $pdf->download('CaseDetail.pdf');
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
