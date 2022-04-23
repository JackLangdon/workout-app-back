<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExerciseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', [AuthController::class, 'me']);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::prefix('exercises')->group(function () {
        Route::get('/', [ExerciseController::class, 'index'])->name('index');

        // Route::get('/create', [ExerciseController::class, 'create'])->name('create');

        // Route::post('/', [ExerciseController::class, 'store'])->name('store');

        // Route::get('/{exercise}', [ExerciseController::class, 'show'])->name('show');

        // Route::get('/{exercise}/edit', [ExerciseController::class, 'edit'])->name('edit');

        // Route::put('/{exercise}', [ExerciseController::class, 'update'])->name('update');

        // Route::delete('/{exercise}', [ExerciseController::class, 'delete'])->name('delete');
    });
});
