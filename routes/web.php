<?php

use App\Http\Controllers\Admin\advertiseController;
use App\Http\Controllers\Admin\articleController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\companyController;
use App\Http\Controllers\Frontend\otherController;
use App\Http\Controllers\Frontend\pageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//frontend routes
Route::get('/',[pageController::class, 'home'])->name('home');
Route::get('/search',[pageController::class, 'search'])->name('search');
Route::get('/category/{slug}',[pageController::class,'category'])->name('category');
Route::get('/article/{id}',[pageController::class,'article'])->name('article');//route parameter passed as slug



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //while using middleware=>check whether it is authorized or not if it is not authorized then you will redirect to the login page
    //otherwise u will redirect to dashboard

    Route::resource('/admin/company', companyController::class)->names('admin.company');//admin folder vitra company folder vitra ko files
    //u can write only company also.
    Route::resource('/admin/category', categoryController::class)->names('admin.category');
    Route::resource('/admin/article', articleController::class)->names('admin.article');
    Route::resource('/admin/advertise', advertiseController::class)->names('admin.advertise');

});

Route::fallback([otherController::class, 'page_not_found']);

require __DIR__.'/auth.php';
