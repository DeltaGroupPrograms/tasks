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
Route::post('/create_user','UsersController@createuser')->name('create_user');
Route::post('/CheckForLogin','UsersController@signin')->name('signin');
Route::get('/admins_dashboard','UsersController@dashboard')->name('admins.dashboard');
Route::get('/info_profile','UsersController@editusers')->name('edit_info');
Route::get('/Projects','WorksController@projects')->name('projects');
Route::get('/Register_Projects','WorksController@register_projects')->name('register_projects');
Route::get('/list_notes','UsersController@note')->name('notes');
Route::post('/update_user','UsersController@update_user')->name('update');
Route::get('/change_pass','UsersController@change_pass_admin')->name('change_pass');
Route::post('/changepass','UsersController@update_pass')->name('changepass');
Route::get('/Manager_users','UsersController@manage_users')->name('Manage_users');
Route::post('/Manager_users','UsersController@final_manage_users')->name('Manage_users');
Route::get('/admin_project','WorksController@projects')->name('projects');
Route::get('/logout','UsersController@logout_user')->name('logout');
Route::get('/register_user','UsersController@register')->name('register_user');
Route::get('/tasks', function () {
    return view('tasks');
});
Route::get('/NewProject', function () {
    return view('NewProject');
});
Route::get('/index', 'UsersController@login_page')->name('login.page');

Route::get('/home', function () {
    return view('home');
});
Route::get('/Doing', function () {
    return view('Doing');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
