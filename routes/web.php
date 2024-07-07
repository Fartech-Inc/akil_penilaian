<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
// Route::get('/penilaian/select-juri/{team}', [PenilaianController::class, 'selectJuri'])->name('penilaian.selectJuri');
// Route::get('/penilaian/create/{team}/{juri}', [PenilaianController::class, 'create'])->name('penilaian.create');
// Route::post('/penilaian/store/{team}/{juri}', [PenilaianController::class, 'store'])->name('penilaian.store');
// Route::get('/penilaian/show/{team}', [PenilaianController::class, 'show'])->name('penilaian.show');
// Route::get('/penilaian/winners', [PenilaianController::class, 'winners'])->name('penilaian.winners');
// Route::get('/penilaian/scorecard', [PenilaianController::class, 'scorecard'])->name('penilaian.scorecard');
// Route::get('/penilaian/informasi', function (){
//     return view('penilaian.informasi');
// });

// Route::get('/penilaian/result/{juri}', [PenilaianController::class, 'result'])->name('penilaian.result');

Route::middleware('auth')->group(function () {
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
    Route::get('/penilaian/create/{team}', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/penilaian/{team}', [PenilaianController::class, 'store'])->name('penilaian.store');
    Route::get('/penilaian/result/{team}', [PenilaianController::class, 'result'])->name('penilaian.result');
    
});

Route::get('/penilaian/winners', [PenilaianController::class, 'winners'])->name('penilaian.winners');
Route::get('/penilaian/scorecard', [PenilaianController::class, 'scorecard'])->name('penilaian.scorecard');
Route::get('/penilaian/informasi', function (){
    return view('penilaian.informasi');
});

Route::get('/penilaian/tambahan', function () {
    return view('penilaian.tambahan');
});
