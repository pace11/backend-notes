<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NotesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Notes
Route::get('notes', [NotesController::class, 'index']);
Route::get('notes/{id}', [NotesController::class, 'showById']);
Route::post('notes', [NotesController::class, 'create']);
Route::patch('notes/update/{id}', [NotesController::class, 'updateById']);
Route::delete('notes/delete/{id}', [NotesController::class, 'deleteById']);
