<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {    // Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
Route::get('/',  'frontend\HomeController@index');
Route::get('thank-you',  'frontend\HomeController@index');

//////////////////////// Partner /////////////////////////////////

Route::get('/partner',function(){
	return view('frontend.partner.expert');
});
Route::get('/services', function(){
	return view('frontend/services');
});
Route::get('/blog','frontend\BlogController@index');
Route::get('blog/show/{id}', 'frontend\BlogController@show');

Route::match(['get','post'],'/partner_login', 'Partner\PartnerController@accountLogin');
Route::match(['get','post'],'/partner_register', 'Partner\PartnerController@accountRegister');
Route::match(['get','post'],'/logout', 'Partner\PartnerController@logout');
Route::get('/special','Partner\PartnerController@getDocument');
Route::get('/certification','Partner\PartnerController@getDocumentcer');
Route::POST('/quotepost','Partner\PartnerController@quote');
Route::get('/acceptquote/{id}/{id2}','Partner\PartnerController@acceptquote');
Route::get('/rejectquote/{id}/{id2}','Partner\PartnerController@rejectquote');
Route::get('/forget-password','Partner\PartnerController@forgetPassword');
Route::post('/retrive-password','Partner\PartnerController@retrivePassword');
Route::get('password-mail/{p_id}/{id}','Partner\PartnerController@reset_Password');
Route::post('/reset-password','Partner\PartnerController@password_reset');
Route::get('partner/template_detail/{id}','Partner\PartnerController@customerdetail');
Route::match(['get','post'],'/quote_ajax','Partner\PartnerController@quote_ajax');
Route::group(['middleware' => 'partner'], function () {
Route::group(['prefix' => 'partner'], function () {
	Route::match(['get','post'],'/partner_dashboard','Partner\PartnerController@index');
	Route::match(['get','post'],'/get_review','Partner\PartnerController@get_review');
	Route::match(['get','post'],'/send_verification_email','Partner\PartnerController@send_verification_email');
	Route::match(['get','post'],'/profile/picture','Partner\PartnerController@profilePicture');
	Route::match(['get','post'],'/profile/picturedel','Partner\PartnerController@removeprofilePicture');
	Route::match(['get','post'],'/cv','Partner\PartnerController@cvupload');
	Route::match(['get','post'],'/cartification','Partner\PartnerController@carupload');

	Route::get('/pdf/{id}','Partner\PartnerController@export_pdf');
	Route::get('/job_detail/{id}','Partner\PartnerController@jobdetail');
	Route::get('/mark/{id}','Partner\PartnerController@mark');
	Route::get('/invoice/{id}','Partner\PartnerController@get_invoice_detail');

	// Route::get('/invoice', function(){
	// 	return view ('frontend.partner.invoice-template');
	// });
	Route::get('/membership', function(){
		return view ('frontend.partner.membership');
	});
	Route::get('/checkout', function(){
		return view ('frontend.partner.checkout');
	});

	});

});
Route::match(['get','post'],'/partner/verify-email','Partner\PartnerController@verify_account');

Route::get('/contact-us',function(){
	return view('frontend.contact-us');
});

Route::get('/privacy-policy',function(){
	return view('frontend.privacy-policy');
});

Route::get('/terms-and-conditions',function(){
	return view('frontend.terms-conditions');
});

Route::get('/contact-us',function(){
	return view('frontend.contact-us');
});
//////////////////////// Partner close /////////////////////////////////
Route::post('quotes/visit','Dashboard\JobManageController@visit');
//////////////////////// Customer /////////////////////////////////
Route::group(['prefix' => 'customer'], function () {
Route::match(['get','post'],'/jobpost','Customer\CustomerController@jobpost');
Route::get('/review','Customer\CustomerController@review');

});
Route::group(['prefix' => 'review'], function () {
Route::post('/addQuoteReview','frontend\ReviewController@add_quote_review');

});
Route::get('dashboard/user_management','Customer\CustomerController@user_management');
//////////////////////// Customer close /////////////////////////////////
//////////////////////// Admin Dashboard //////////////////////////////
Route::match(['get','post'],'/admin/login', 'Dashboard\JobManageController@admin_login');

Route::group(['middleware' => 'admin'], function () {
Route::group(['prefix' => 'dashboard'], function () {
	Route::get('/', function(){
		return view('/admin.index');
	});

	Route::match(['get','post'],'/logout', 'Dashboard\JobManageController@logout');
	Route::get('/job_management', 'Dashboard\JobManageController@index');
	Route::get('/blogs', 'Dashboard\JobManageController@blogs');
	Route::get('/blog/create', 'frontend\BlogController@create');
	Route::get('/blog/edit/{id}', 'frontend\BlogController@edit');
	Route::get('/blog/delete/{id}', 'frontend\BlogController@destroy');
	Route::post('/blog/store', 'frontend\BlogController@store');
	Route::match(['get','post'],'/template/{id}', 'Dashboard\JobManageController@template');
	Route::get('/upload_tamplate', 'Dashboard\JobManageController@showtemplate');
	Route::get('/job_delete/{id}', 'Dashboard\JobManageController@destroy');
	Route::post('/post_portal', 'Dashboard\JobManageController@post_portal');
	Route::post('/mark', 'Dashboard\JobManageController@mark');
	Route::match(['get','post'],'/jobstatus_update/{id}', 'Dashboard\JobManageController@jobstatus_update');

	Route::get('/icons', function(){
		return view('/admin.icons');
	});
	Route::get('/add_tamplate', function(){
		return view('/admin.add_tamplate');
	});
	Route::get('/quotes','Dashboard\JobManageController@quotes');
	Route::get('/map', function(){
		return view('/admin.map');
	});
	Route::get('/notifications', function(){
		return view('/admin.notifications');
	});
	Route::get('/user', 'Dashboard\ProfileController@show_partner');
	Route::get('/tables', function(){
		return view('/admin.tables');
	});
	Route::get('/typography', function(){
		return view('/admin.typography');
	});
	Route::get('/upgrade', function(){
		return view('/admin.upgrade');
	});
	Route::get('/add-users', function(){
		return view('/admin.add-users');
	});
	Route::get('/edit_user/{id}', function(){
		return view('/admin.edit_user');
	});
});
});

Route::get('addmoney/stripe', array('as' => 'addmoney.paystripe','uses' => 'MoneySetupController@PaymentStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'MoneySetupController@postPaymentStripe'));
//////////////////////// Admin Dashboard Close ////////////////////////////
