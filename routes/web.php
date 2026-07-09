<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/staff', function(){
    return view('staff/StaffView');
});

Route::get('/manager', function(){
    return view('/manager/ManagerView');
});

Route::get('/direktur', function(){
    return view('/direktur/DirekturView');
});

Route::get('/finance', function(){
    return view('/finance/FinanceView');
});

Route::get('/supervisor', function(){
    return view('/supervisor/SupervisorView');
});