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

Route::get('trangchu', 'pagecontroller@getindex');
Route::get('nongsan', 'pagecontroller@getnongsan');
Route::get('giathitruong', 'pagecontroller@getgiathitruong');
Route::get('nhathumua', 'pagecontroller@getnhathumua');
Route::get('kienthuc', 'pagecontroller@getkienthuc');
 




Route::auth();
Route::get('customernongdan/{id}',['as'=>'customernongdan','uses'=> 'pagecontroller@getnongsanctm']);
Route::post('registercustomer','CustomersController@register');

Route::group(['middleware'=>'customers'], function() {
	Route::get('logincustomer','CustomersController@login')->name('customers.login');
	Route::post('logincustomernd','CustomersController@postLogin')->name('customers.login.post');
});
//Đăng ký thành viên

//Route::get('register', 'Auth\RegisterController@getRegister');
//Route::post('register', 'Auth\RegisterController@postRegister'); 
// Đăng nhập và xử lý đăng nhập

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
// Đăng xuất
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

Route::get('adminnongsan','pagecontroller@getadminnongsan' );
Route::resource('adminblog', 'BlogController');
Route::resource('admingiathitruong', 'price_productController');
Route::resource('admincustomer', 'CustomersController');
Route::resource('adminproduct', 'roductController');
Route::delete('adminproductdlt/{id}','roductController@destroyns');







