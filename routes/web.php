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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');

Route::GET('admin/home ','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');



Route::get('/securitystandards', function () {
    return view('panacea.securitystandards');
});

Route::get('/training', function () {
    return view('panacea.training');
});

Route::get('/service', function () {
    return view('panacea.service');
});

Route::get('/tools', function () {
    return view('panacea.tools');
});
Route::get('/generalawareness', function () {
    return view('panacea.generalawareness');
});
Route::get('/securitygovernance', function () {
    return view('panacea.securitygovernance');
});

Route::get('/riskmanagement', function () {
    return view('panacea.riskmanagement');
});
Route::get('/compliencereguratory', function () {
    return view('panacea.compliencereguratory');
});
Route::get('/compliencestandards', function () {
    return view('panacea.compliencestandards');
});
Route::get('/penetrationtesting', function () {
    return view('panacea.penetrationtesting');
});
Route::get('/securityassessment', function () {
    return view('panacea.securityassessment');
});
Route::get('/iso', function () {
    return view('panacea.iso');
});

Route::get('/pci', function () {
    return view('panacea.pci');
});




