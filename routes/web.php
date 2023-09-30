<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bodymController;
use App\Http\Controllers\exerciseController;
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

Route::get('/', function () {
    return view('welcome');});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //path ของ body_measurement
    Route::get('/showbody', [bodymController::class, 'showBodyData']) -> name('body.show');
    Route::get('/insertbody', function () {return view('body.insertbodydata');} ) -> name('body.insert');
    Route::post('/showbody/insertbody', [bodymController::class, 'insertBodyData']) -> name('body.showinsert');
    Route::get('/editbody/{id}', [bodymController::class, 'editbody']) -> name('body.edit');
    Route::put('/editbody/updatebody/{id}', [bodymController::class, 'updateBody']) -> name('body.update');
    Route::get('/chartbody', [bodymController::class, 'showChartbody'])->name('body.chart');


    //path ของ exerciserecord
    Route::get('/showexercise', [exerciseController::class, 'showExerciseRecords'] ) -> name('exercise.show');
    Route::get('/insertexercise', function () {return view('exercise.insertexercise');} ) -> name('exercise.showinsert');
    Route::post('/showexercise/insertexercise', [exerciseController::class, 'insertExercis']) -> name('exercise.insert');
    Route::get('/editexercise/{id}', [exerciseController::class, 'editbody']) -> name('exercise.edit');
    Route::put('/editexercise/updateexercise/{id}', [exerciseController::class, 'updateExercise']) -> name('exercise.update');
    Route::get('/chartexercise', [exerciseController::class, 'showChartexercise'])->name('exercise.chart');
});

Route::get('/plan', function () {
    $user = Auth::user();
    return view("plan", compact('user'));
});
