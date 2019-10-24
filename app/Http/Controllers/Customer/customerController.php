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

        //dd($request->all());
        $toemail=$request->input('job_email');
        Mail::send('mail.sendmail',['u_name' =>$request->input('customer_name')],
      function ($message) use ($toemail)
      {

        $message->subject('Experlu.com - Welcome To Experlu');
        $message->from('searchbysearchs@gmail.com', 'Experlu');
        $message->to($toemail);
      });
        DB::table('fa_jobpost')->insert($request->all());
        return view('frontend.thanks');
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
