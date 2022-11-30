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

Auth::routes(['register'=>false]);

Route::resource('consultant', App\Http\Controllers\Company\ConsultantController::class)->except(['index','show','edit','update','destroy']);

Route::group(['middleware' => ['auth','role:Consultant']],function (){
    Route::resource('consultant', App\Http\Controllers\Company\ConsultantController::class)->except(['create','store']);
    Route::resource('company', App\Http\Controllers\Company\CompanyController::class);
});

Route::group(['domain' => '{company}.'.getenv('APP_SUB_URL'),'prefix' => 'c'], function () {
    Route::get('/home', function ($company) {
        dd($company);
    });
});