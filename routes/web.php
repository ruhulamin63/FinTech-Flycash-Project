<?php

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

	Route::get('/register', 'RegisterController@index');
	Route::post('/register', 'RegisterController@insert')->name('register.insert');

	Route::get('/login', 'LoginController@index');
	Route::post('/login', 'LoginController@verify');	

	Route::get('/logout', 'LogoutController@index');

//================================================================

	Route::group(['middleware' =>['sess']], function () {

		Route::get('/home','HomeController@index')->name('home');

//============================================================================================================

		Route::get('/pages/officer/agent/index','AgentController@index')->name('agent_index');

		Route::get('/pages/officer/agent/edit/{id}', 'AgentController@edit')->name('agent_edit');
		Route::post('/pages/officer/agent/edit/{id}', 'AgentController@update');

		Route::get('/pages/officer/agent/delete/{id}', 'AgentController@delete');
		Route::post('/pages/officer/agent/delete/{id}', 'AgentController@destroy')->name('agent_delete');

//============================================End Agent Routing===================================================

		Route::get('/pages/officer/customer/show','CustomerController@show')->name('customer_show');

		Route::get('/pages/officer/customer/edit/{id}', 'CustomerController@edit')->name('customer_edit');
		Route::post('/pages/officer/customer/edit/{id}', 'CustomerController@update');

		Route::get('/pages/officer/customer/delete/{id}', 'CustomerController@delete');
		Route::get('/pages/officer/customer/delete/{id}', 'CustomerController@destroy')->name('customer_delete');
		
//**********************************************End Customer Routing************************************************
		
		// 	Route::get('transection', ['as' => 'transection.tran', 'uses' => 'TranController@tran']);
		// 	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		// 	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);

    });

//================================================================================================================

	Route::group(['middleware' =>['sess']], function () {

		//Route::resource('user', 'InfoController');

		Route::get('/pages/officer/information','InfoController@index')->name('information_index');
		Route::get('/pages/officer/information/details/{id}','InfoController@details')->name('information_details');

		Route::get('/pages/officer/information/edit/{id}','InfoController@edit')->name('information_edit');
		Route::post('/pages/officer/information/edit/{id}','InfoController@update')->name('information_update');
		
		Route::get('/pages/officer/information/delete/{id}','InfoController@delete');
		Route::post('/pages/officer/information/delete/{id}','InfoController@destroy')->name('information_destroy');

//=============================================================================================================

		Route::get('/pages/officer/profile','InfoController@edit')->name('profile_edit');
		Route::post('/pages/officer/profile','InfoController@update')->name('profile.update');

//==============================================================================================================

		// Route::post('/pages/officer/profile','UserController@store')->name('image_insert');
		// Route::post('/pages/officer/profile','UserController@update');

//==============================================================================================================

		Route::get('/pages/officer/password','PassController@edit')->name('password_edit');
		Route::post('/pages/officer/password','PassController@update');

//==============================================================================================================

		// Invoice pdf generator using dompdf
		Route::get('/pages/officer/pdf/invoice/{id}','PdfController@pdf')->name('pdf.invoice');

//==============================================================================================================

	});

