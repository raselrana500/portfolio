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
Route::get('/contact/store', 'ContactController@create')->name('contact.store');
Route::get('/admin', 'BackendPagesController@index')->name('admin.index');

//hero section route
Route::get('/admin/hero', 'HeroController@ViewInfo')->name('admin.hero');
Route::get('/admin/hero/{id}', 'HeroController@ViewSingleData')->name('admin.hero.view');
Route::get('/admin/hero/edit/{id}', 'HeroController@Edit')->name('admin.hero.edit');
Route::post('/admin/hero/update/{id}', 'HeroController@update')->name('admin.hero.update');

//footer
Route::get('/admin/footer', 'FooterController@index')->name('admin.footer');
Route::get('/admin/footer/edit/{id}', 'FooterController@showEdit')->name('admin.footer.edit');
Route::post('/admin/footer/update/{id}', 'FooterController@update')->name('admin.footer.update');

//social link
Route::get('/admin/social', 'SocialController@index')->name('admin.social');
Route::get('/admin/social/add', 'SocialController@create')->name('admin.social.add');
Route::post('/admin/social/add/store', 'SocialController@store')->name('admin.social.store');

//skill section route
Route::get('/admin/skill', 'SkillController@index')->name('admin.skill');
Route::get('/admin/skill/{id}', 'SkillController@edit')->name('admin.pages.skill.edit');
Route::post('/admin/skill/update/{id}', 'SkillController@update')->name('admin.pages.skill.update');
Route::get('/admin/skill/delete/{id}', 'SkillController@Delete')->name('admin.pages.skill.delete');
Route::get('/admin/skill/create/new', 'SkillController@showCreatePage')->name('admin.pages.skill.new');
Route::post('/admin/skill/create/new/insertdata', 'SkillController@store')->name('admin.pages.skill.new.insert');

//project section route
Route::get('/admin/project/manage', 'ProjectController@index')->name('admin.project.manage');
Route::get('/admin/project/{id}', 'ProjectController@edit')->name('admin.pages.project.edit');
Route::post('/admin/project/update/{id}', 'ProjectController@update')->name('admin.pages.project.update');
Route::get('/admin/project/delete/{id}', 'ProjectController@Delete')->name('admin.pages.project.delete');
Route::get('/admin/project/create/new', 'ProjectController@showCreatePage')->name('admin.pages.project.new');
Route::post('/admin/project/create/new/insertdata', 'ProjectController@store')->name('admin.pages.project.new.insert');

//contact routes
Route::get('admin/contact/manage','ContactController@index')->name('admin.contact.manage');
Route::get('/admin/contact/manage/{id}', 'ContactController@showSingleData')->name('admin.contact.manage.show');
Route::get('/admin/contact/manage/delete/{id}', 'ContactController@Delete')->name('admin.contact.manage.delete');


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
