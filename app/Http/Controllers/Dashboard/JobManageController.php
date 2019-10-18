<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class JobManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $alljobs = DB::table('fa_jobpost')->orderBy('id','desc')->get();
       return view('/admin.job_management',compact('alljobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function template(Request $request, $id)
    {
        if($request->isMethod('post')){
            $data=array(
          'job_id' => $id,
          'template' => $request->input('template')
            );
           // dd($data);
       $temp = DB::table('fa_template')->insert($data);
        DB::table('fa_jobpost')->where('id',$id)->update(['status'=>'1']);
       //dd($request->all());
        }
        $job = DB::table('fa_jobpost')->where('id',$id)->first();
       return view('/admin.template',compact('job'));
    }
     public function showtemplate()
    {
        $template=DB::table('fa_template')
        ->join('fa_jobpost','fa_jobpost.id','=','fa_template.job_id')
        ->orderBy('fa_template.temp_id','desc')->get();
       // dd($template);
        return view('/admin.make_template',compact('template'));
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
