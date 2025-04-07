<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ItemGroupController as AdminItemGroupController;
use App\Http\Controllers\Admin\ItemController as AdminItemController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ExpenditureController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('user.dashboard');
    }
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});




Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('user.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/expenditures', [ExpenditureController::class, 'index'])->name('expenditures.index');
    Route::get('/expenditures/create', [ExpenditureController::class, 'create'])->name('expenditures.create');
    Route::post('/expenditures', [ExpenditureController::class, 'store'])->name('expenditures.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});



require __DIR__.'/auth.php';
