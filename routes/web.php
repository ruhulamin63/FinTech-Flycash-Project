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
	Route::post('/register', 'RegisterController@insert');

	Route::get('/login', 'LoginController@index');
	Route::post('/login', 'LoginController@verify');	

	Route::get('/logout', 'LogoutController@index');

//================================================================

	Route::group(['middleware' =>['sess']], function () {

		Route::get('/home','HomeController@index')->name('home');

	// 	Route::get('agentinfo', ['as' => 'agent.edit', 'uses' => 'AgentProfileController@edit']);
	// 	Route::get('agentdetails', ['as' => 'agent.index', 'uses' => 'AgentdetailsController@index']);

	// 	Route::get('userprofile', ['as' => 'users.seeinfo', 'uses' => 'SeeUserProfileController@seeinfo']);
	// 	Route::get('userdetails', ['as' => 'users.details', 'uses' => 'UserdetailsController@details']);
		

	// //***************************************************************************************************************************

	// 	Route::get('transection', ['as' => 'transection.tran', 'uses' => 'TranController@tran']);
	// 	Route::get('information', ['as' => 'information.index', 'uses' => 'AllInfoDataController@index']);


	// //=========================================================================================================================	

	// 	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
	// 	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
	// 	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
	// 	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
	// 	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
	// 	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
	// 	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
    });

//=========================================================================================

	Route::group(['middleware' =>['sess']], function () {

		Route::resource('user', 'UserController');
		Route::get('/pages/communication/information','UserController@index')->name('information_details');
		
		Route::get('/pages/communication/profile','UserController@edit')->name('profile_edit');
		Route::post('/pages/communication/profile','UserController@update')->name('profile_update');

	// 	Route::resource('tran_edit', 'TransectionController');

	// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	// 	Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	// 	Route::post('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	});

