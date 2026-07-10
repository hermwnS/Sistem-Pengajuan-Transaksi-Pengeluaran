<?php

use App\Http\Controllers\ProfileController;
use App\Http\Resources\SubmissionsResource;
use App\Models\Submissions;
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

Route::post('/staff', function(){
    return view('staff/StaffView');
});

Route::get('/staff/pengajuan', function(){
    return view('staff/pengajuanStaffView');
});

Route::get('/staff/pengajuan/{id}', function(int $id){
    return new SubmissionsResource(Submissions::findorFail($id));
});

Route::post('/manager', function(){
    return view('/manager/ManagerView');
});

Route::get('/manager/pengajuan', function(){
    return view('manager/pengajuanManagerView');
});

Route::get('/manager/pengajuan/{id}', function(int $id){
    return new SubmissionsResource(Submissions::findorFail($id));
});

Route::post('/direktur', function(){
    return view('/direktur/DirekturView');
});

Route::get('/direktur/pengajuan', function(){
    return view('direktur/pengajuanDirekturView');
});

Route::get('/direktur/pengajuan/{id}', function(int $id){
    return new SubmissionsResource(Submissions::findorFail($id));
});

Route::post('/finance', function(){
    return view('/finance/FinanceView');
});

Route::get('/finance/pengajuan', function(){
    return view('/finance/pengajuanFinanceView');
});

Route::get('/finance/pengajuan/{id}', function(int $id){
    return new SubmissionsResource(Submissions::findorFail($id));
});

Route::post('/supervisor', function(){
    return view('/supervisor/SupervisorView');
});

Route::get('/supervisor/pengajuan', function(){
    return view('/supervisor/pengajuanSupervisorView');
});

Route::get('/supervisor/pengajuan/{id}', function(int $id){
    return new SubmissionsResource(Submissions::findorFail($id));
});