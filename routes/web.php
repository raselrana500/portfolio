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

// Route::get('/', function () {
//     $hero=Hero::orderBy('id','desc')->get();
//     return view('frontend.layouts.master',compact('hero'));
// });
Route::get('/', 'HeroController@index')->name('index');
Route::get('/contact', 'ContactController@create')->name('contact.store');
Route::get('/admin', 'BackendPagesController@index')->name('admin.index');
//hero section route
Route::get('/admin/hero', 'HeroController@ViewInfo')->name('admin.hero');
Route::get('/admin/hero/{id}', 'HeroController@ViewSingleData')->name('admin.hero.view');
Route::get('/admin/hero/edit/{id}', 'HeroController@Edit')->name('admin.hero.edit');
// Route::get('/admin/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
// Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');

Route::group(['prefix'=>'admin'],function(){
    //Admin Login Routes
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
    //reset link send
    Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    //reset password
    Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
