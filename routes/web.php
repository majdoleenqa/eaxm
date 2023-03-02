<?php

use App\Http\Controllers\Company_branchController;
use App\Http\Controllers\CompanyController;
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


    Route::prefix('cms/')->middleware('guest:company')->group(function(){
        Route::get('{guard}/login' ,[UserAuthController::class , 'showlogin'])->name('view.login');
       Route::post('{guard}/login' , [UserAuthController::class , 'login']);
      });

      Route::prefix('cms/company')->middleware('auth::company')->group(function(){
          Route::get('logout' ,[UserAuthController::class ,'logout'])->name('view.logout');
      });
});

// ->middleware('auth:admin,author')
Route::prefix('cms/admin/')->group (function(){

    Route::view('' , 'cms.temp');

    Route::resource('companies', CompanyController::class);
    Route::post('companies_update/{id}',[CompanyController::class,'update']);

    Route::resource('company_branch', Company_branchController::class);
    Route::post('company_branch_update/{id}',[Company_branchController::class,'update']);

});


