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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/federation', [FederationController::class, 'index'])->name('federation.index');
Route::get('/federation/new', [FederationController::class, 'create'])->name('federation.create');
Route::post('/federation', [FederationController::class, 'store'])->name('federation.store');
Route::get('/federation/{id}/edit', [FederationController::class, 'edit'])->name('federation.edit');
Route::put('/federation/{id}', [FederationController::class, 'update'])->name('federation.update');
Route::delete('/federation/{id}', [FederationController::class, 'destroy'])->name('federation.destroy');

Route::get('/junior-enterprise', [JuniorEnterprise::class, 'index'])->name('junior_enterprise.index');
Route::get('/junior-enterprise/new', [JuniorEnterprise::class, 'create'])->name('junior_enterprise.create');
Route::post('/junior-enterprise', [JuniorEnterprise::class, 'store'])->name('junior_enterprise.store');
Route::get('/junior-enterprise/{id}/edit', [FederationController::class, 'edit'])->name('junior_enterprise.edit');
Route::put('/junior-enterprise/{id}', [FederationController::class, 'update'])->name('junior_enterprise.update');
Route::delete('/junior-enterprise/{id}', [JuniorEnterprise::class, 'destroy'])->name('junior_enterprise.destroy');

require __DIR__.'/auth.php';
