<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/edit/{abiturient}', function () {
//     return view('edit');
// })->name('abi_edit');

Route::get('/abiturients/edit/{abiturient}', [App\Http\Controllers\AbiturientController::class, 'edit'])->name('abi_edit');
Route::put('/edit/{abiturient}', [App\Http\Controllers\AbiturientController::class, 'update'])->name('abi_update');
Route::delete('/edit/{abiturient}', [App\Http\Controllers\AbiturientController::class, 'destroy'])->name('abi_delete');
Route::get('/create', [App\Http\Controllers\AbiturientController::class, 'create'])->name('abi_create');
Route::put('/create', [App\Http\Controllers\AbiturientController::class, 'store'])->name('abi_create');
Route::get('/spec', [App\Http\Controllers\SpecialityController::class, 'index'])->name('spec_index');
Route::get('/', [App\Http\Controllers\AbiturientController::class, 'index'])->name('main_index');
Route::get('/abiturients/{abiturient}', [App\Http\Controllers\AbiturientController::class, 'show'])->name('abi_index');
Route::get('/doc', [App\Http\Controllers\DocumenttypeController::class, 'index'])->name('doc_index');
