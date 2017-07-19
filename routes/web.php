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

/**
 * Routes for public section
 *
 * Includes:
 * Auth routes generated by `artisan make:auth`
 *  - /register (GET, POST)
 *  - /login (GET, POST)
 *  - /logout (GET)
 *  - /password/reset (GET)
 *  - /password/email (POST)
 */
Auth::routes();

Route::get('/', 'IndexController@index')->name('index');

Route::resource('departments', 'DepartmentController');

Route::resource('employee', 'Employee\EmployeeController');

Route::resource('employee_status', 'Employee\StatusController');

Route::resource('employee_status_group', 'Employee\StatusGroupController');

/**
 * Routes for admin section
 * /
Route::get('/admin/', function() {
    echo 'Admin main page will be here';
});

Route::get('/admin/login/', function() {
    echo 'Admin login page will be here';
});

/*
Route::get(
    '/',
    //function () { return view('welcome');

});*/

/*
Route::get('', 'cntName@action');
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
Route::get('', );
*/





