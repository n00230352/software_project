<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //communities
    Route::get('/communities',[CommunityController::class, 'index'])->name('communities.index');

    //books
    Route::get('/books',[BookController::class, 'index'])->name('books.index');

    //donations
    Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');
    Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');

    // Route::get('/books/create',[BookController::class, 'create'])->name('books.create');

    // Route::get('/communities/create',[CommunityController::class, 'create'])->name('communities.create');
    // Route::get('/communities',[CommunityController::class, 'store'])->name('communities.store');
    // Route::get('/communities/{community}',[CommunityController::class, 'show'])->name('communities.show');
    // Route::get('/communities/{community}/edit',[CommunityController::class, 'edit'])->name('communities.edit');
    // Route::get('/communities/{community}',[CommunityController::class, 'update'])->name('communities.update');
    // Route::get('/communities/{community}',[CommunityController::class, 'destroy'])->name('communities.destroy');
});

require __DIR__.'/auth.php';
