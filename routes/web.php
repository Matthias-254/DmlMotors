<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/posts', [PostController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
        ->middleware(['auth','admin'])->name('posts.create');

Route::resource('posts', PostController::class);

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');

Route::get('/faq/create', [FAQController::class, 'create'])->name('faq.create');

Route::get('/faq/{id}/edit', [FAQController::class, 'edit'])->name('faq.edit');

Route::resource('faq', FAQController::class);

Route::get('/about', [InfoController::class, 'about'])->name('info.about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::resource('contact', ContactController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');