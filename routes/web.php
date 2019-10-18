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
Route::get('/', function () {
    return view('frontend.index');
});

//////////////////////// Partner /////////////////////////////////
Route::get('/partner',function(){
	return view('frontend.partner.index');
});

Route::match(['get','post'],'/partner_login', 'Partner\PartnerController@accountLogin');
Route::match(['get','post'],'/partner_register', 'Partner\PartnerController@accountRegister');
Route::match(['get','post'],'/logout', 'Partner\PartnerController@logout');
Route::get('/special','Partner\PartnerController@getDocument');
Route::get('/certification','Partner\PartnerController@getDocumentcer');
Route::group(['prefix' => 'partner'], function () {
Route::match(['get','post'],'/partner_dashboard','Partner\PartnerController@index');
Route::match(['get','post'],'/profile/picture','Partner\PartnerController@profilePicture');
Route::match(['get','post'],'/profile/picturedel','Partner\PartnerController@removeprofilePicture');
Route::match(['get','post'],'/cv','Partner\PartnerController@cvupload');
Route::match(['get','post'],'/cartification','Partner\PartnerController@carupload');

});

//////////////////////// Partner close /////////////////////////////////

//////////////////////// Customer /////////////////////////////////
Route::group(['prefix' => 'customer'], function () {
Route::match(['get','post'],'/jobpost','Customer\customerController@jobpost');


});

//////////////////////// Customer close /////////////////////////////////
//////////////////////// Admin Dashboard //////////////////////////////
Route::group(['prefix' => 'dashboard'], function () {
	Route::get('/', function(){
		return view('frontend.admin.index');
	});
	Route::get('/job_management', function(){
		return view('frontend.admin.job_management');
	});
	Route::get('/upload_tamplate', function(){
		return view('frontend.admin.make_template');
	});
	Route::get('/icons', function(){
		return view('frontend.admin.icons');
	});
	Route::get('/map', function(){
		return view('frontend.admin.map');
	});
	Route::get('/notifications', function(){
		return view('frontend.admin.notifications');
	});
	Route::get('/user', function(){
		return view('frontend.admin.user');
	});
	Route::get('/tables', function(){
		return view('frontend.admin.tables');
	});
	Route::get('/typography', function(){
		return view('frontend.admin.typography');
	});
	Route::get('/upgrade', function(){
		return view('frontend.admin.upgrade');
	});
});
//////////////////////// Admin Dashboard Close ////////////////////////////