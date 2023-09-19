<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GraduationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProdiQuotaController;
use App\Http\Controllers\StudyProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login')->name('home');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard.index')->name('dashboard');
    Route::resource('departments', DepartmentController::class)->except('create', 'edit');
    Route::resource('departments/study-programs', StudyProgramController::class)->except('create', 'edit', 'show');
    Route::get('departments/{department}/study-programs', [StudyProgramController::class, 'show'])->name('study-programs.show');
    Route::resource('graduations', GraduationController::class)->except('create', 'edit');
    Route::get('graduations/{graduation}/set-quota', [ProdiQuotaController::class, 'index'])->name('graduations.set-quota');
    Route::post('graduations/set-quota', [ProdiQuotaController::class, 'store'])->name('graduations.set-quota.store');
});
