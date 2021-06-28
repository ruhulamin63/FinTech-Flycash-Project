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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('agentinfo', ['as' => 'agent.edit', 'uses' => 'App\Http\Controllers\AgentProfileController@edit']);
	Route::get('agentdetails', ['as' => 'agent.index', 'uses' => 'App\Http\Controllers\AgentdetailsController@index']);

	Route::get('userprofile', ['as' => 'users.seeinfo', 'uses' => 'App\Http\Controllers\SeeUserProfileController@seeinfo']);
	Route::get('userdetails', ['as' => 'users.details', 'uses' => 'App\Http\Controllers\UserdetailsController@details']);
	

//***************************************************************************************************************************

	Route::get('transection', ['as' => 'transection.tran', 'uses' => 'App\Http\Controllers\TranController@tran']);
	Route::get('information', ['as' => 'information.index', 'uses' => 'App\Http\Controllers\AllInfoDataController@index']);


//=========================================================================================================================	

	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::resource('tran_edit', 'App\Http\Controllers\TransectionController');
	Route::resource('information', 'App\Http\Controllers\InformationController');

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::post('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::post('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

