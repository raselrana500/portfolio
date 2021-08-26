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
Route::get('/', 'Frontend\HeroController@index')->name('index');
Route::post('/contact', 'Frontend\ContactController@insertContactInfo')->name('contact.store');
Route::get('/admin', 'Backend\PagesController@index')->name('admin.index');

//hero section route
Route::get('/admin/hero', 'Backend\HeroController@ViewInfo')->name('admin.hero');
Route::get('/admin/hero/{id}', 'Backend\HeroController@ViewSingleData')->name('admin.hero.view');
Route::get('/admin/hero/edit/{id}', 'Backend\HeroController@Edit')->name('admin.hero.edit');
Route::post('/admin/hero/update/{id}', 'Backend\HeroController@update')->name('admin.hero.update');

//footer
Route::get('/admin/footer', 'Backend\FooterController@index')->name('admin.footer');
Route::get('/admin/footer/edit/{id}', 'Backend\FooterController@showEdit')->name('admin.footer.edit');
Route::post('/admin/footer/update/{id}', 'Backend\FooterController@update')->name('admin.footer.update');

//social link
Route::get('/admin/social', 'Backend\SocialController@index')->name('admin.social');
Route::get('/admin/social/add', 'Backend\SocialController@create')->name('admin.social.add');
Route::post('/admin/social/add/store', 'Backend\SocialController@store')->name('admin.social.store');

//skill section route
Route::get('/admin/skill', 'Backend\SkillController@index')->name('admin.skill');
Route::get('/admin/skill/{id}', 'Backend\SkillController@edit')->name('admin.pages.skill.edit');
Route::post('/admin/skill/update/{id}', 'Backend\SkillController@update')->name('admin.pages.skill.update');
Route::get('/admin/skill/delete/{id}', 'Backend\SkillController@Delete')->name('admin.pages.skill.delete');
Route::get('/admin/skill/create/new', 'Backend\SkillController@showCreatePage')->name('admin.pages.skill.new');
Route::post('/admin/skill/create/new/insertdata', 'Backend\SkillController@store')->name('admin.pages.skill.new.insert');

//project section route
Route::get('/admin/project/manage', 'Backend\ProjectController@index')->name('admin.project.manage');
Route::get('/admin/project/{id}', 'Backend\ProjectController@edit')->name('admin.pages.project.edit');
Route::post('/admin/project/update/{id}', 'Backend\ProjectController@update')->name('admin.pages.project.update');
Route::get('/admin/project/delete/{id}', 'Backend\ProjectController@Delete')->name('admin.pages.project.delete');
Route::get('/admin/project/create/new', 'Backend\ProjectController@showCreatePage')->name('admin.pages.project.new');
Route::post('/admin/project/create/new/insertdata', 'Backend\ProjectController@store')->name('admin.pages.project.new.insert');

//contact routes
Route::get('admin/contact/manage','Backend\ContactController@index')->name('admin.contact.manage');
Route::get('/admin/contact/manage/{id}', 'Backend\ContactController@showSingleData')->name('admin.contact.manage.show');
Route::get('/admin/contact/manage/delete/{id}', 'Backend\ContactController@Delete')->name('admin.contact.manage.delete');


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
