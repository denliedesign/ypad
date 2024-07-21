<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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

//Route::get('/temp/index', function () { return view('/temp/index'); });
//Route::get('/temp/about', function () { return view('/temp/about'); });
//Route::get('/temp/free-resources', function () { return view('/temp/free-resources'); });
//Route::get('/temp/education', function () { return view('/temp/education'); });
//Route::get('/temp/support', function () { return view('/temp/support'); });

Route::get('/', function () { return view('/welcome'); });
Route::get('/about', function () { return view('/about'); });
//Route::get('/free-resources', function () { return view('/free-resources'); });
Route::get('/membership-and-certification', function () { return view('/membership-and-certification'); });
Route::get('/support', function () { return view('/support'); });
Route::get('/subscribe', function () { return view('/subscribe'); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users/export/', [RegisteredUserController::class, 'export'])->name('users.export');

require __DIR__.'/auth.php';


