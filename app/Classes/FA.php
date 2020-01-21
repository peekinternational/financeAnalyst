<?php
namespace App\Classes;
use DB;
use Session;
use Carbon\Carbon;

class FA {

        public function check(Request $request){

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


	public function checkquote($id)
    {
       $res=DB::table('fa_quote')->where('job_id','=',$id)->count();
         return $res;
    }

    public function checkalreadyquote($id)
    {
        //dd($id);
        $userId=Session::get('faUser')->p_id;
       $res=DB::table('fa_quote')->where('job_id','=',$id)->where('p_id',$userId)->count();
         return $res;
    }

    public function countQuoteReviews($quote_id, $job_id)
  	{
  		$count =  DB::table('fa_quotes_review')
              ->select(DB::raw('avg(overall_rating) AS `starsAvg`, count(customer_name) AS `usersCount`'))
              ->where('quote_id','=', $quote_id)
              ->where('job_id','=', $job_id)
              ->get()->toArray();
          return $count;
  	}
    public function countUserReviews($p_id)
  	{
  		$count =  DB::table('fa_quotes_review')
              ->select(DB::raw('avg(overall_rating) AS `starsAvg`, count(customer_name) AS `usersCount`'))
              ->where('p_id','=', $p_id)
              ->get()->toArray();
          return $count;
  	}

    public function getAuthorName($id){
      $name = DB::table('fa_admin')->where('id','=',$id)->first()->name;
      // dd($subCategories);
      return $name;
    }

    public function checkPayment($q_id,$p_id)
    {
        //dd($id);
       $check=DB::table('fa_payments')->where('q_id','=',$q_id)->where('p_id','=',$p_id)->count();
       // dd($check);
        if ($check == 1) {
          return 1;
        }else {
          return 0;
        }
    }


}

?>
