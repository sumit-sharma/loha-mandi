<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('mandirate', function () {
    return view('pages.mandirate');
});
Route::get('buyandsell', 'AdsController@BuyandSell')->name('buyandsell');
    
Route::get('scrappricing',function () {
    return view('pages.traderpricing');
});
Route::get('city', function () {
    return view('pages.city');
});
Route::get('state', function () {
    return view('pages.state');
});
Route::get('sell', function () {
    return view('pages.sell');
});
Route::get('pricing', function () {
    return view('pages.pricing');
});
Route::get('contact', function () {
    return view('pages.contact');
});
// contact form management//
Route::post('contacts','ContactController@store')->name('contacts');
Route::get('contactlist','ContactController@index')->name('contactlist');
Route::get('getcontactlist','ContactController@InquiryList')->name('getcontactlist');
Route::get('/admin/contact/view/{id}','ContactController@InquiryView')->name('/admin/contact/view/{id}');
Route::get('/admin/contact/delete/{id}','ContactController@destroy')->name('/admin/contact/delete/{id}');

// Route::get('/logout', 'AdminAuth\LoginController@logout')->name('/logout');


//end here//
Route::get('/view/{id}','HomeController@ShowUser')->name('/view/{id}');
Route::get('listing','HomeController@BussinessListing')->name('listing');
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin/auth/login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin/logout');


  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'vendor'], function () {
  Route::get('/login', 'VendorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'VendorAuth\LoginController@login');
  Route::post('/logout', 'VendorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'VendorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'VendorAuth\RegisterController@register');

  Route::post('/password/email', 'VendorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'VendorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'VendorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'VendorAuth\ResetPasswordController@showResetForm');
});

// Route::group(['prefix' => 'trader'], function () {
//   Route::get('/login', 'TraderAuth\LoginController@showLoginForm')->name('login');
//   Route::post('/login', 'TraderAuth\LoginController@login');
//   Route::post('/logout', 'TraderAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'TraderAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'TraderAuth\RegisterController@register');

//   Route::post('/password/email', 'TraderAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//   Route::post('/password/reset', 'TraderAuth\ResetPasswordController@reset')->name('password.email');
//   Route::get('/password/reset', 'TraderAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//   Route::get('/password/reset/{token}', 'TraderAuth\ResetPasswordController@showResetForm');
// });

Auth::routes();

Route::post('logged_in','Auth\LoginController@authenticate');


// Route::get('/home','Auth\LoginController@index')->name('/home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@aboutus')->name('about');
Route::get('/registration', 'HomeController@showfrom')->name('registration');
Route::post('/user/register','Auth\RegisterController@userregi')->name('registration');

Route::get('steelplant','AdminController@index')->name('steelplant');
Route::get('steelplantlist','AdminController@getsteelplantlist')->name('steelplantlist');
Route::get('/importsteelplant','AdminController@importcsv')->name('importsteelplant');
Route::post('/import_excel/import', 'AdminController@import');
Route::post('/traderexcel/','ImportController@import')->name('/import/traderexcel/');
Route::get('/traderimport','ImportController@importxls')->name('traderimport');
Route::get('/scrapgenerator','ImportController@importgen')->name('scrapgenerator');
Route::post('scrapexcel','ImportController@scrapgen')->name('scrapexcel');
Route::get('steeltraderlist','AdminController@SteeltraderList')->name('steeltraderlist');
Route::get('scrapgeneratorlist','AdminController@ScrapgeneratorList')->name('scrapgeneratorlist');
Route::get('gettraderlist','AdminController@GettraderList')->name('gettraderlist');
Route::get('getgenratorlist','AdminController@GetgenratorList')->name('getgenratorlist');

Route::post('uploadlist','ImportController@UploadList')->name('uploadlist');

Route::get('admin/view/user/{id}','AdminController@view')->name('admin/view/user/{id}');
Route::get('admin/edit/user/{id}','AdminController@edit')->name('admin/edit/user/{id}');
Route::post('admin/update/{id}','AdminController@update')->name('admin/update/{id}');
Route::get('admin/delete/{id}','AdminController@destroy')->name('admin/delete/{id}');
Route::get('/admin/image/upload/{id}','AdminController@UploadImage')->name('/admin/image/upload/{id}');
Route::post('/admin/update/images/{id}','AdminController@UpdateImages')->name('/admin/update/images/{id}');

//search

Route::post('search','SearchController@index')->name('search');
Route::post('homesearch','SearchController@HomeSearch');

//ad mangemnet
Route::get('/admin/createad','AdsController@index');
Route::post('admin/scrap/ad','AdsController@create_ad');

Route::get('admin/ad/list','AdsController@adlists')->name('admin/ad/list');
Route::get('getalladlist','AdsController@adlist');
Route::get('ad/delete/{id}','AdsController@destroy')->name('ad/delete/{id}');
Route::get('ad/edit/{id}','AdsController@edit')->name('ad/edit/{id}');
Route::post('ad/update/{id}','AdsController@update')->name('ad/update/{id}');
Route::get('admin/ad/unapproved','AdsController@unapprove')->name('admin/ad/unapproved');
Route::get('unapproveadlist','AdsController@unapprovelist')->name('unapproveadlist');
Route::get('ad/approve/{id}','AdsController@approve')->name('ad/approve/{id}');
Route::get('ad/view/{id}','AdsController@show')->name('ad/view/{id}');
Route::get('/addetail/{id}','AdsController@view');
Route::post('quoteprice','AdsController@Quote')->name('quoteprice');

//Plan Management
Route::get('/createplan','PlanController@index');
Route::get('/editplan/{id}','PlanController@edit')->name('editplan/{id}');
Route::post('/admin/plan','PlanController@store');
Route::get('/plans','PlanController@PlanList')->name('plans');

Route::get('/getplanlist','PlanController@AllPlanList')->name('getplanlist');
Route::get('plan/delete/{id}','PlanController@destroy')->name('plan/delete/{id}');
Route::get('plan/edit/{id}','PlanController@edit')->name('plan/edit/{id}');
Route::post('plan/update/{id}','PlanController@update')->name('plan/update/{id}');
Route::get('plan/view/{id}','PlanController@show')->name('plan/view/{id}');

//Message management//
Route::get('message','MessageController@index')->name('message');

Route::get('sendsmstoalluser','MessageController@sendsmstoalluser')->name('sendsmstoalluser');

Route::post('sendsms','MessageController@store')->name('sendsms');

Route::post('sendtoalluser','MessageController@sendtoalluser')->name('sendtoalluser');
Route::post('sendsmstosubcriber','MessageController@SmstoSubcriber')->name('sendsmstosubcriber');
Route::post('sendsmsnonsubscriber','MessageController@SmstoNonSubcriber')->name('sendsmstosubcriber');
Route::post('inputmanually','MessageController@InputManually')->name('inputmanually');
Route::post('notification','MessageController@Notification')->name('notification');
Route::post('sendtoall','MessageController@SendtoAll')->name('sendtoall');

Route::get('savesms','MessageController@create')->name('savesms');
Route::post('admin/savesms','MessageController@SaveSms')->name('admin/savesms');
Route::get('viewsms','MessageController@ViewSms')->name('viewsms');
Route::get('viewsmslist','MessageController@ViewSmslist')->name('viewsmslist');
Route::get('admin/edit/sms/{id}','MessageController@EditSms')->name('admin/edit/sms/{id}');
Route::get('admin/delete/sms/{id}','MessageController@DeleteSms')->name('admin/delete/sms/{id}');
Route::post('admin/editsms/{id}','MessageController@update');
Route::get('sms/history','MessageController@History')->name('sms/history');
Route::get('getsmshistory','MessageController@GetSMSHistory')->name('getsmshistory');
Route::get('uploadsmslist','MessageController@UploadFile')->name('uploadsmslist');

//City management
Route::get('addcity','AdminController@AddCity')->name('addcity');
Route::post('admin/addcity','AdminController@FillCity')->name('admin/addcity');
Route::get('citylist','AdminController@CityList')->name('citylist');
Route::get('getcitylist','AdminController@GetCityList')->name('addcity');
Route::get('/admin/city/{id}','AdminController@DeleteCity')->name('/admin/city/{id}');

//Price management
Route::get('ingt','PriceController@Ingt')->name('ingt');

Route::Post('admin/product/price','PriceController@create')->name('admin/product/price');

//paypal

Route::get('paywithpaypal', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

//bid management

Route::get('bidlist','AdminController@GetBidList')->name('bidlist');
Route::get('getlistdetail','AdminController@GetBidListing')->name('getlistdetail');
Route::get('admin/bid/delete/{id}','AdminController@DeleteBid');

