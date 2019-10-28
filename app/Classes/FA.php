<?php
namespace App\Classes;
use DB;
use Session;
use Carbon\Carbon;

class FA {
        public function checkquote(Request $request){
           //$userinfo=$request->session()->get('faUser')->p_id; 
           // $data=DB::table('fa_quote')->where('job_id',$id)->where('p_id',$userinfo)->first();
            return "hek";
        }
        public function abc()
        {
            $data="hello";
            return  $data;
        }
	// public function test()
	// {
	// 	$test = "zeeshan";
	// 	return $test;
	// }

    public function checktemplate($id)
    {
       $templete= DB::table('fa_user_template')->where('job_id',$id)->first();

        if(!empty($templete))
        {
          return 1;
        }
        else
        {
            return 0;
        }
    }

}

?>