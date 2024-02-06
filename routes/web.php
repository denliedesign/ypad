<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/users', function () {
    if (auth()->check() && auth()->user()->email === 'info@ypadnow.com') {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    } else {
        return redirect('/')->with('error', 'Unauthorized access');
    }
})->middleware('auth');

Route::delete('/users/{user}', 'App\Http\Controllers\Auth\RegisteredUserController@destroy')->middleware(['auth', 'verified'])->name('users.destroy');


Route::get('/resources', function () {
    return view('resources');
})->middleware('auth');

Route::get('/subscribe', function () {
    return view('/subscribe');
});
Route::get('/about', function () {
    return view('/about');
});

Route::get('/certification', function () {
    return view('/certification');
});

Route::get('/education', function () {
    return view('/education');
});

Route::get('/support', function () {
    return view('/support');
});

Route::get('/parents', function () {
    return view('/parents');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
