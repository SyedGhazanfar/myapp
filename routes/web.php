<?php

use Illuminate\Support\Facades\Route;
use 
App\Http\Controllers\UserController,
App\Http\Controllers\AdminController
;


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
    if(session()->has('Admin') || session()->has('Accountant') || session()->has('HR')){
        return redirect('profile');
    }
    else{
        return view('pages.login');
    }
});
Route::get('logout', function () {
    if(session()->has('Admin')){
        session()->pull('Admin', null);
    }
    elseif(session()->has('Accountant')){
        session()->pull('Accountant', null);
    }
    elseif(session()->has('HR')){
        session()->pull('HR', null);
    }
    return redirect('/');
});
Route::post('/', [UserController::class, 'login']);


// Admin Routing
Route::group(['middleware'=>['adminauth']], function(){
    Route::get('profile', [AdminController::class, 'index']);
    Route::get('add-user', function () {
        return view('dashboard.admin.addUser');
    });
    Route::post('adduser', [AdminController::class, 'adduser']);
    Route::get('manage-user', [AdminController::class, 'getData']);
    Route::get('useredit/{id}', [AdminController::class, 'useredit']);
    Route::get('userdelete/{id}', [AdminController::class, 'userdelete']);
    Route::post('updateuser', [AdminController::class, 'userupdate']);
});
// Accountant Routing
Route::group(['middleware'=>['accountantauth']], function(){
    Route::get('profile', function(){
        return view('dashboard.account.profile');
    });
});
// HR Routing
Route::group(['middleware'=>['hrauth']], function(){
    Route::get('profile', function(){
        return view('dashboard.hr.profile');
    });
});
