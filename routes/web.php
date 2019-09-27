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

 Route::resource('product','gallary');
Route::get('/',[
    'as' => 'user.login',
    'uses' => 'LoginController@login']);
Route::get('/register','LoginController@register');
Route::post('/loginsuccess',[
    'as' => 'login.success',
    'uses' => 'LoginController@loginsuccess']);

Route::get('/user_add','LoginController@add_janu');
Route::get('/data','AdminLogin@data');

Route::post('/adduser','LoginController@success');
Route::get('/admin','AdminLogin@index');
Route::post('/check','AdminLogin@check'); 
Route::get('/admin_user','logincontroller@user');
Route::get('/add_product','ProductController@add_product');
Route::get('/add_p','ProductController@index');
Route::get('delete/{course_id}', [
        'as' => 'course.delete',
        'uses' => 'AdminLogin@delete'
 ]);
Route::post('/add_register','logincontroller@success');


Route::middleware('auth')
    ->group(function () 
{
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('index', function () {
        return view('index');
    });
    
    Route::get('/codes', function () {
        return view('codes');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    
    Route::post('/add','logincontroller@add');
    
    
    Route::get('logout', [
        'as' => 'logout',
        'uses' => 'logincontroller@logout',]);
    
    
    Route::resource('feedback','feedbackController');
    Route::resource('contact','contactcontroller');


    
    
});