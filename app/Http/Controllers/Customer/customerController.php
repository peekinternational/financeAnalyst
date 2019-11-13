<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function user_management()
    {
        $allpartner = DB::table('fa_partner')->orderBy('p_id','desc')->get();
        return view('admin.user_management',compact('allpartner'));
    }

    public function jobpost(Request $request)
    {

        $this->validate($request, [
            'job_title' => 'required',
            'job_type' => 'required',
            'ended_year' => 'required',
            'job_case' => 'required',
            'customer_name' => 'required',
            'job_email' => 'required',
            'mobilenumber' => 'required|digits_between:10,12',
            'city' => 'required'
        ],[
            'job_title.required'=>'Enter job title',
            'email.required' => 'Enter valid email',
            'job_type.required' => 'Enter job type',
            'ended_year.required' => 'Enter ended year',
            'phoneno.required' =>'Enter Your Mobile Number',
            'city.required' => 'Enter city ',
            'mobilenumber.required'=>'Enter mobile number',
            'mobilenumber.digits_between' => 'Phone Number must be contain 10,12 digits',
        ]);
        $job_email=$request->job_email;
        $job= DB::table('fa_jobpost')->where('job_email',$job_email)->get();
        $total_job=count($job);
        if($total_job < 4) {

            $toemail = $request->input('job_email');
            Mail::send('mail.sendmail', ['u_name' => $request->input('customer_name')],
                function ($message) use ($toemail) {

                    $message->subject('Experlu.com - Welcome To Experlu');
                    $message->from('searchbysearchs@gmail.com', 'Experlu');
                    $message->to($toemail);
                });
            DB::table('fa_jobpost')->insert($request->all());
            return view('frontend.thanks');
        }
        else{
            $request->session()->flash('message','You already post 3 jobs');
            return back()->withInput();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
