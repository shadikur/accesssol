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
    return view('index-2');
})->name('index');

Route::get('our-purpose','SolutionController@our_purpose')->name('our.purpose');
Route::get('why-we-serve','SolutionController@whyServe')->name('why.we.serve');
Route::get('why-us','SolutionController@whyUs')->name('why.us');
Route::get('referral-program','SolutionController@refProgram')->name('ref.program');
Route::get('managed-it-services','SolutionController@ItServices')->name('it.services');
Route::get('support-specialist','SolutionController@supSpecialist')->name('support.specialist');
Route::get('strategic-it-consulting','SolutionController@ItConsulting')->name('it.consulting');
Route::get('cloud-computing','SolutionController@cloudComputing')->name('cloud.computing');
Route::get('network-and-security','SolutionController@comSecurity')->name('network.security');
Route::get('backup-and-recovery','SolutionController@backupRecovery')->name('backup.recovery');
Route::get('careers','SolutionController@careers')->name('careers.page');
Route::get('contact-us',function(){
    return view('contact_us');
})->name('contact.us');

Route::get('speak-with-ohio',function(){
    return view('form_for_client');
})->name('speak.ohio');


Route::get('/test',function(){
    return view('test');
});
Route::get('/test-2',function(){
    return view('test2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
