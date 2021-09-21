<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\RecordDeleteController;
use App\Models\Members;

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

Route::get('/', function(){return view('member');});
//Route::get('/', [MembersController::class, 'index']);
Route::post('/', [MembersController::class, 'enter'])->name('member');
Route::get('view', [MembersController::class, 'view'])->name('memberview');
Route::get('delete/{id}', [RecordDeleteController::class, 'destroy']);


