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

Route::get('/','PagesController@getHome' );


Route::get('/about','PagesController@getAbout' );

Route::get('/contact','PagesController@getContact' );
Route::get('/anmelden','PagesController@getAnmelden' );
Route::get('/register','PagesController@getRegister' );

Route::get('/messages','MessagesController@getMessages' );
Route::post('/contact/submit','MessagesController@submit' );
Route::post('home/signup','MessagesController@button_submit' );

Route::get('/signup','RegistrationController@getSignup' );
Route::post('/signup','RegistrationController@postSignup');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@postLogin');
Route::post('/logout','LoginController@logout');
Route::get('/admin','AdminController@admin')->middleware('admin');
Route::get('/employee','EmployeeController@employee')->middleware('employee');
Route::get('/activate/{email}/{activationCode}','ActivationController@activate');
Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');
Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');
Route::get('/createjob','CreateJobController@getcreateJob' );







