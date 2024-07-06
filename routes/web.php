<?php

use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PenilaianController::class, 'index'])->name('penilaian.index');
Route::get('/penilaian/select-juri/{team}', [PenilaianController::class, 'selectJuri'])->name('penilaian.selectJuri');
Route::get('/penilaian/create/{team}/{juri}', [PenilaianController::class, 'create'])->name('penilaian.create');
Route::post('/penilaian/store/{team}/{juri}', [PenilaianController::class, 'store'])->name('penilaian.store');
Route::get('/penilaian/show/{team}', [PenilaianController::class, 'show'])->name('penilaian.show');
Route::get('/penilaian/winners', [PenilaianController::class, 'winners'])->name('penilaian.winners');
Route::get('/penilaian/scorecard', [PenilaianController::class, 'scorecard'])->name('penilaian.scorecard');