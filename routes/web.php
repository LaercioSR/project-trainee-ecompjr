<?php

use App\Http\Controllers\FederationController;
use App\Models\JuniorEnterprise;
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

Route::get('/federation', [FederationController::class, 'index']);
Route::get('/federation/new', [FederationController::class, 'create']);
Route::post('/federation', [FederationController::class, 'store']);
Route::delete('/federation/{id}', [FederationController::class, 'destroy']);

Route::get('/junior-enterprise', [JuniorEnterprise::class, 'index']);
Route::get('/junior-enterprise/new', [JuniorEnterprise::class, 'create']);
Route::post('/junior-enterprise', [JuniorEnterprise::class, 'store']);
Route::delete('/junior-enterprise/{id}', [JuniorEnterprise::class, 'destroy']);
