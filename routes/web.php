<?php

use App\Http\Controllers\aktifitasController;
use App\Http\Controllers\notofikasiController;
use App\Http\Controllers\pekerjaanController;
use App\Http\Controllers\personelController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\revisiGambarController;
use App\Http\Controllers\toolsController;
use App\Http\Controllers\workloadAnalysisController;
use Illuminate\Support\Facades\Route;
// chart
use App\Http\Controllers\ProyekChartController;
use App\Http\Controllers\PersonelChartController;
use App\Http\Controllers\ToolsChartController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProyekChartController::class, 'index'])->name('dashboard');


Route::resource('personel', personelController::class);
Route::resource('aktifitas', AktifitasController::class);
Route::resource('notifikasi', NotofikasiController::class);
Route::resource('pekerjaan', PekerjaanController::class);
Route::resource('proyek', ProyekController::class);
Route::resource('revisi_gambar', RevisiGambarController::class);
Route::resource('tools', ToolsController::class);
Route::resource('workload_analysis', WorkloadAnalysisController::class);
Route::get('workload_analysis/{workload_analysis}/edit', [WorkloadAnalysisController::class, 'edit'])->name('workload_analysis.edit');
Route::get('workload_analysis/{workload_analysis}/destroy', [WorkloadAnalysisController::class, 'destroy'])->name('workload_analysis.destroy');
Route::get('workload_analysis/{workload_analysis}/show', [WorkloadAnalysisController::class, 'show'])->name('workload_analysis.show');


// chart
Route::get('/ChartProyek', [ProyekChartController::class, 'index'])->name('dashboard');
Route::get('/ChartPersonel', [PersonelChartController::class, 'index'])->name('personel.chart');
Route::get('/ChartTools', [ToolsChartController::class, 'index'])->name('tools.chart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
