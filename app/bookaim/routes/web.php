<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Models\Donation;
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
    Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
    Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
    //donations
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');
    Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');

});

require __DIR__ . '/auth.php';
