<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
class MoneySetupController extends Controller
{
 public function paymentStripe()
 {
 return view('paymentstripe');
 }


public function postPaymentStripecharge(Request $request)
 {
 $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 //'amount' => 'required',
 ]);
 $input = $request->all();
 if ($validator->passes()) { 
 $input = array_except($input,array('_token'));
$stripe = \Stripe::setApiKey(env('STRIPE_SECRET'));
 try {
 $token = $stripe->tokens()->create([
 'card' => [
 'number' => $request->get('card_no'),
 'exp_month' => $request->get('ccExpiryMonth'),
 'exp_year' => $request->get('ccExpiryYear'),
 'cvc' => $request->get('cvvNumber'),
 ],
 ]);
if (!isset($token['id'])) {
	dd($token);
 return redirect()->route('addmoney.paymentstripe');
 }
 $charge = $stripe->charges()->create([
 'card' => $token['id'],
 'currency' => 'USD',
 'amount' => 20.49,
 'description' => 'wallet',
 ]);
 
 if($charge['status'] == 'succeeded') {
	 dd($charge);
 echo "<pre>";
 print_r($charge);exit();
 return redirect()->route('addmoney.paymentstripe');
 } else {
	 dd("error");
 \Session::put('error','Money not add in wallet!!');
 
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 } catch (Exception $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 //return redirect()->url('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 }
 }





////////// monthly free plan////////////
 public function postPaymentStripefree(Request $request)
 {
 $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 //'amount' => 'required',
 ]);
 $input = $request->all();
 if ($validator->passes()) { 
 $input = array_except($input,array('_token'));
$stripe = \Stripe::setApiKey('sk_test_736e4BO4MrWwgnGDMiVYQ2z000JdtbBfSJ');
//dd($stripe);
 try {
 $token = $stripe->tokens()->create([
 'card' => [
 'number' => $request->get('card_no'),
 'exp_month' => $request->get('ccExpiryMonth'),
 'exp_year' => $request->get('ccExpiryYear'),
 'cvc' => $request->get('cvvNumber'),
 ],
 ]);
if (!isset($token['id'])) {
	dd($token);
 return redirect()->route('addmoney.paymentstripe');
 }
 $charge = $stripe->plans()->create([
 "product" => "prod_GYewlOlNZumeBx",
  "currency"=> "gbp",
  "interval" => "month",
  "interval_count" => "1",
  "usage_type"=> "licensed",
  "billing_scheme"=> "per_unit",
  "nickname" => "Experlu",
  "trial_period_days"=> "30",
  "amount_decimal"=> "30000"
 ]);
 dd($charge);
 if($charge['status'] == 'succeeded') {
	 
 echo "<pre>";
 print_r($charge);exit();
 return redirect()->route('addmoney.paymentstripe');
 } else {
	 dd("error");
 \Session::put('error','Money not add in wallet!!');
 
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 } catch (Exception $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 //return redirect()->url('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 }
 }


////////// monthly plan////////////
 public function postPaymentStripemonthly(Request $request)
 {
 $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 //'amount' => 'required',
 ]);
 $input = $request->all();
 if ($validator->passes()) { 
 $input = array_except($input,array('_token'));
$stripe = \Stripe::setApiKey('sk_test_736e4BO4MrWwgnGDMiVYQ2z000JdtbBfSJ');
//dd($stripe);
 try {
 $token = $stripe->tokens()->create([
 'card' => [
 'number' => $request->get('card_no'),
 'exp_month' => $request->get('ccExpiryMonth'),
 'exp_year' => $request->get('ccExpiryYear'),
 'cvc' => $request->get('cvvNumber'),
 ],
 ]);
if (!isset($token['id'])) {
	dd($token);
 return redirect()->route('addmoney.paymentstripe');
 }
 $charge = $stripe->plans()->create([
 "product" => "prod_Ga4iZ7TuImTEz2",
  "currency"=> "gbp",
  "interval" => "month",
  "interval_count" => "1",
  "usage_type"=> "licensed",
  "billing_scheme"=> "per_unit",
  "nickname" => "Monthly Experlu Subscription Fee",
  "amount_decimal"=> "50000"
 ]);
 dd($charge);
 if($charge['status'] == 'succeeded') {
	 
 echo "<pre>";
 print_r($charge);exit();
 return redirect()->route('addmoney.paymentstripe');
 } else {
	 dd("error");
 \Session::put('error','Money not add in wallet!!');
 
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 } catch (Exception $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 //return redirect()->url('addmoney/stripe');
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
 \Session::put('error',$e->getMessage());
  //dd($e->getMessage());
 return Redirect::to('addmoney/stripe');
 }
 }
 }

}