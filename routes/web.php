<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Resources\SubmissionsResource;
use App\Models\Submissions;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route dengan redirect berdasarkan role
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Staff Routes
Route::middleware(['auth', 'verified', 'role:staff'])->group(function () {
    Route::get('/staff', function(){
        return view('staff/StaffView');
    })->name('staff');

    Route::post('/staff/pengajuan', function(){
        return view('staff/pengajuanStaffView');
    });

    Route::get('/staff/pengajuan/{id}', function(int $id){
        return new SubmissionsResource(Submissions::findorFail($id));
    });
});

// Manager Routes
Route::middleware(['auth', 'verified', 'role:manager'])->group(function () {
    Route::get('/manager', function(){
        return view('/manager/ManagerView');
    })->name('manager');

    Route::post('/manager/pengajuan', function(){
        return view('manager/pengajuanManagerView');
    });

    Route::get('/manager/pengajuan/{id}', function(int $id){
        return new SubmissionsResource(Submissions::findorFail($id));
    });
});

// Direktur Routes
Route::middleware(['auth', 'verified', 'role:direktur'])->group(function () {
    Route::get('/direktur', function(){
        return view('/direktur/DirekturView');
    })->name('direktur');

    Route::get('/direktur/pengajuan', function(){
        return view('direktur/pengajuanDirekturView');
    });

    Route::get('/direktur/pengajuan/{id}', function(int $id){
        return new SubmissionsResource(Submissions::findorFail($id));
    });
});

// Finance Routes
Route::middleware(['auth', 'verified', 'role:finance'])->group(function () {
    Route::get('/finance', function(){
        return view('/finance/FinanceView');
    })->name('finance');

    Route::get('/finance/pengajuan', function(){
        return view('/finance/pengajuanFinanceView');
    });

    Route::get('/finance/pengajuan/{id}', function(int $id){
        return new SubmissionsResource(Submissions::findorFail($id));
    });
});

// Supervisor Routes
Route::middleware(['auth', 'verified', 'role:supervisor'])->group(function () {
    Route::get('/supervisor', function(){
        return view('/supervisor/SupervisorView');
    })->name('supervisor');

    Route::get('/supervisor/pengajuan', function(){
        return view('/supervisor/pengajuanSupervisorView');
    });

    Route::get('/supervisor/pengajuan/{id}', function(int $id){
        return new SubmissionsResource(Submissions::findorFail($id));
    });
});