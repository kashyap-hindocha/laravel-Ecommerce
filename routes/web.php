<?php

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/about','about@about');

// Route::post('/register','register@register');
// Route::post('/login','LoginController@Login');

Route::get('/login',[
	'as' => 'user.login',
    'uses' => 'LoginController@login']);
    Route::post('/loginsuccess',[
    'as' => 'login.success',
    'uses' => 'logincontroller@loginsuccess']);

    Route::get('logout', [
        'as' => 'logout',
        'uses' => 'logincontroller@logout',]);

        Route::get('/home',function(){
            return view('home');
        });

// Route::get('/data','AdminLogin@data');
Route::post('/adduser','logincontroller@success');
// Route::get('/admin','AdminLogin@index');
// Route::post('/check','AdminLogin@check'); 
// Route::get('/admin_user','logincontroller@user');
// Route::get('/add_product','ProductController@add_product');
// Route::get('/add_p','ProductController@index');
// Route::get('delete/{course_id}', [
//         'as' => 'course.delete',
//         'uses' => 'AdminLogin@delete'
 //]);
Route::get('/single','products@single');
Route::get('/single2','products@single2');
Route::get('/products','products@products');
Route::get('/products2','products@products2');

//Auth::routes('auth.login')->name('auth');

Route::get('/home', 'HomeController@index')->name('home');
