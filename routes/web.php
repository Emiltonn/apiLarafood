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
Route::get('admin/plans/create' ,[App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');
Route::put('admin/plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'update'])->name('plans.update');
Route::get('admin/plans/{url}/edit', [App\Http\Controllers\Admin\PlanController::class, 'edit'])->name('plans.edit');
Route::any('admin/plans/search', [App\Http\Controllers\Admin\PlanController::class, 'search'])->name('plans.search');
Route::get('admin/plans' ,[App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');
Route::post('admin/plans' ,[App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
Route::delete('admin/plans/{url}' ,[App\Http\Controllers\Admin\PlanController::class, 'destroy'])->name('plans.destroy');
Route::get('admin/plans/{url}' ,[App\Http\Controllers\Admin\PlanController::class, 'show'])->name('plans.show');

Route::get('admin' ,[App\Http\Controllers\Admin\PlanController::class, 'index'])->name('admin.index');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
