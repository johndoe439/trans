<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [UserController::class, 'welcome'])->name('welcome');


Route::get('/quotedetails', [UserController::class, 'quote'])->name('quote.view');
Route::post('/quote', [UserController::class, 'store'])->name('quote.store');


Route::post('/track', [UserController::class, 'show'])->name('track.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'verified')->group(function () {

Route::get('/dashboard', [UserController::class, 'view'])->name('dashboard');
Route::post('/dashboard/quote', [UserController::class, 'stay'])->name('stay');

Route::put('/dashboard/quotes/{quote}', [UserController::class, 'update'])->name('quotes.update');
Route::delete('/dashboard/quotes/{quote}', [UserController::class, 'delete'])->name('quotes.destroy');
Route::get('/dashboard/details/{quote}', [UserController::class, 'details'])->name('details');
Route::get('/dashboard/edits/{quote}', [UserController::class, 'edits'])->name('edits');

});

require __DIR__.'/auth.php';
