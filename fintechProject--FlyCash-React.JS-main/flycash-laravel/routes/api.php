<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/users-login', 'LoginController@verify');
Route::post('/register', 'RegisterController@register');

//========================   CUSTOMER   ======================================

Route::post('/transaction','CustomerTransactionController@makeTransaction');

Route::post('/customer/upload','CustomerController@upload');

Route::get('/customer/transactionlist','CustomerTransactionController@index');


//========================================Officer Router =======================================

//========================Customer Route================================================

    //Route::post('/emp-register', [CustomerController::class, 'store']);
    Route::get('show-customer', 'CustomerController@show');
    //Route::get('transaction-customer/{email}', 'CustomerController@view');
    Route::get('transaction-customer', 'CustomerController@view');

    Route::get('edit-customer/{id}', 'CustomerController@edit');
    Route::put('update-customer/{id}', 'CustomerController@update');

    Route::put('block-list/{id}', 'CustomerController@userblocked');
    Route::put('block-list/{id}', 'CustomerController@userunblocked');

<<<<<<< HEAD
    // Route::delete('delete-customer/{id}', [CustomerController::class, 'destroy']);
=======
Route::get('/admin/customerList','AdminController@getAllCustomer');
Route::get('admin/edit-customer/{id}', 'AdminController@edit');
Route::put('/admin/update-customer/{id}', 'AdminController@update');
>>>>>>> customer

//===========================Agent Route================================

    Route::get('show-agent', 'AgentController@index');
    Route::get('transaction-agent', 'AgentController@view');

<<<<<<< HEAD
    Route::get('edit-agent/{id}', 'AgentController@edit');
    Route::put('update-agent/{id}', 'AgentController@update');

    Route::get('agent-blockeduser/{id}', 'AgentTransactionController@agentblocked');
	Route::get('agent-unblockuser/{id}', 'AgentTransactionController@agentblocked');
=======
Route::get('/admin/officerList','AdminController@getAllOfficer');
Route::get('/admin/ongoingCampaign','AdminController@ongoingCampaign');
Route::get('/admin/agentList','AdminController@getAllAgent');
Route::post('/admin/addComponent','AdminController@adminRegister');

Route::post('/admin/addCampaign','AdminController@addCampaign');
Route::delete('/admin/removeCampaign/{id}','AdminController@removeCampaign');

>>>>>>> customer

//======================Profile Router======================

    Route::get('edit-password/{id}', 'PassController@editPassword');
    Route::post('update-password/{id}', 'PassController@updatePassword');

    Route::get('view-profile', 'ProfileController@index');

<<<<<<< HEAD
<<<<<<< HEAD
    Route::get('edit-profile/{id}', 'ProfileController@edit');
    Route::put('update-profile/{id}', 'ProfileController@update');
=======
Route::post('/admin/addCampaign','AdminController@addCampaign');
Route::post('/admin/discountCode','AdminController@discountCode');
>>>>>>> customer

//=====================================End Officer Router =======================================
=======
Route::post('/addmoneytoagent','AdminController@agentAddMoney');
Route::post('/admin/addDiscountCode','AdminController@addDiscountCode');

//===================================================   Admin   ===========================================================//========================================Officer Router =======================================

 

//========================Customer Route================================================

 

    //Route::post('/emp-register', [CustomerController::class, 'store']);
    Route::get('show-customer', 'CustomerController@show');
    //Route::get('transaction-customer/{email}', 'CustomerController@view');
    Route::get('transaction-customer', 'CustomerController@view');

 

    Route::get('edit-customer/{id}', 'CustomerController@edit');
    Route::put('update-customer/{id}', 'CustomerController@update');

 

    Route::put('block-list/{id}', 'CustomerController@userblocked');
    Route::put('block-list/{id}', 'CustomerController@userunblocked');

 

    // Route::delete('delete-customer/{id}', [CustomerController::class, 'destroy']);

 

//===========================Agent Route================================

 

    Route::get('show-agent', 'AgentController@index');
    Route::get('transaction-agent', 'AgentController@view');

 

    Route::get('edit-agent/{id}', 'AgentController@edit');
    Route::put('update-agent/{id}', 'AgentController@update');

 

    Route::get('/show-agent/{id}', 'AgentController@agentblocked');
    Route::get('/show-agent/{id}', 'AgentController@agentblocked');

 

//======================Profile Router======================

 

    Route::get('edit-password/{id}', 'OfficerController@editPassword');
    Route::post('update-password/{id}', 'OfficerController@updatePassword');

 

    Route::get('view-profile', 'OfficerController@index');

 

    Route::get('edit-profile/{id}', 'OfficerController@edit');
    Route::put('update-profile/{id}', 'OfficerController@update');

<<<<<<< HEAD
//=====================================End Officer Router =======================================
>>>>>>> customer
=======
 

//=====================================End Officer Router =======================================
>>>>>>> customer
