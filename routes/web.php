<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
            ->group(function() {
    
    Route::get('plans/create' ,[App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [App\Http\Controllers\Admin\PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [App\Http\Controllers\Admin\PlanController::class, 'search'])->name('plans.search');
    Route::get('plans' ,[App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');
    Route::post('plans' ,[App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
    Route::delete('plans/{url}' ,[App\Http\Controllers\Admin\PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}' ,[App\Http\Controllers\Admin\PlanController::class, 'show'])->name('plans.show');
    
    Route::get('/' ,[App\Http\Controllers\Admin\PlanController::class, 'index'])->name('admin.index');
});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
