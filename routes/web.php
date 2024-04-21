<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customer.index');
});
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {

    Route::group([
        'prefix' => 'user'
    ], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id?}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('admin.user.delete');
    });

    Route::group([
        'prefix' => 'food'
    ], function () {
        Route::get('/', [FoodController::class, 'index'])->name('admin.food.index');
        Route::get('/create', [FoodController::class, 'create'])->name('admin.food.create');
        Route::post('/store', [FoodController::class, 'store'])->name('admin.food.store');
        Route::get('/delete/{food}', [FoodController::class, 'destroy'])->name('admin.food.delete');
    });

    Route::group([
        'prefix' => 'category'
    ], function () {
        Route::get('/', [CategoryFoodController::class, 'index'])->name('admin.category_food.index');
        Route::get('/create', [CategoryFoodController::class, 'create'])->name('admin.category_food.create');
        Route::post('/store', [CategoryFoodController::class, 'store'])->name('admin.category_food.store');
        Route::get('/edit/{id?}', [CategoryFoodController::class, 'edit'])->name('admin.category_food.edit');
        Route::post('/update', [CategoryFoodController::class, 'update'])->name('admin.category_food.update');
        Route::get('/delete/{categoryFood}', [CategoryFoodController::class, 'destroy'])->name('admin.category_food.delete');
    });

    Route::group([
        'prefix' => 'review'
    ], function () {
        Route::get('/', [ReviewController::class, 'index'])->name('admin.review.index');
        Route::get('/', [ReviewController::class, 'index'])->name('admin.review.index');
    });
});

Route::group([
    'prefix' => 'customer'
], function () {
    Route::get('/index', [IndexController::class, 'index'])->name('customer.index');
    Route::get('/food', [IndexController::class, 'indexFood'])->name('customer.food');
    Route::get('/recipe/{food}', [IndexController::class, 'indexRecipe'])->name('customer.recipe');
});


