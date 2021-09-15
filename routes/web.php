<?php

 use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

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
Route::group(['namespace'=> 'Front'], function() {
Route::get('/', 'MainController@index')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/help_center', 'MainController@help_center')->name('help_center');
Route::get('/privacy_policy', 'MainController@privacy_policy')->name('privacy_policy');
Route::get('/user_agreement', 'MainController@user_agreement')->name('user_agreement');
Route::get('/services', 'MainController@services')->name('services');

Route::get('/register_client', 'RegistrationController@index')->name('register_client');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::post('contact', 'ContactUsController@sendEmail')->name('contact_us');
});

Auth::routes(['register' => false]);


Route::group(['prefix' => 'dashboard', 'namespace'=> 'Dashboard', 'middleware' => 'checkauth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('settings', 'SettingsController');
    Route::resource('clients', 'UserController');
    Route::resource('company_info', 'Company_InfoController');
    Route::resource('activity_types', 'Activity_typesController');
    Route::resource('region', 'RegionController');
    Route::resource('company_sector_specialist', 'Company_sector_specialistController');
    Route::resource('contactus', 'ContactUsController');
    Route::resource('services', 'ServicesController');

});


