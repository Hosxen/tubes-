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

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/dashboard', [\App\Http\Controllers\PMIController::class, 'index'])->name('dashboard');

Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login-process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.process');

Route::middleware('auth')->group(function () {
    Route::get('/me', [\App\Http\Controllers\AuthController::class, 'me'])->name('me');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::post('/profile', [\App\Http\Controllers\AuthController::class, 'updateProfile'])->name('profile.update');

    Route::get('/donor', [\App\Http\Controllers\PMIController::class, 'donor'])->name('donor');
    Route::get('/donor/create', [\App\Http\Controllers\PMIController::class, 'donorCreate'])->name('donor.create');
    Route::post('/donor', [\App\Http\Controllers\PMIController::class, 'donorStore'])->name('donor.store');
    Route::get('/donor/{donor}/download', [\App\Http\Controllers\PMIController::class, 'downloadDonor'])->name('donor.download');

    Route::get('/schedule/{schedule}/donor', [\App\Http\Controllers\PMIController::class, 'showScheduleDonor'])->name('schedule.show.donor');

    Route::get('/user/{user}/edit', [\App\Http\Controllers\PMIController::class, 'editUser'])->name('user.edit');
    Route::put('/user/{user}', [\App\Http\Controllers\PMIController::class, 'updateUser'])->name('user.update');
    Route::delete('/user/{user}', [\App\Http\Controllers\PMIController::class, 'deleteUser'])->name('user.delete');
});

Route::get('/donor/about', [\App\Http\Controllers\PMIController::class, 'aboutDonor'])->name('donor.about');
Route::get('/blood-stock', [\App\Http\Controllers\PMIController::class, 'bloodStock'])->name('blood-stock');
Route::get('/contact', [\App\Http\Controllers\PMIController::class, 'contact'])->name('contact');
Route::get('/schedule', [\App\Http\Controllers\PMIController::class, 'schedule'])->name('schedule');
Route::get('/find-friend', [\App\Http\Controllers\PMIController::class, 'findFriend'])->name('find-friend');
