<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.layouts.index');
});
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group([
    'prefix' => 'admin'
], function () {
    Route::group([
        'prefix' => 'food'
    ], function () {
        Route::get('/index', [FoodController::class, 'index'])->name('admin.food.index');
        Route::get('/create', [FoodController::class, 'create'])->name('admin.food.create');
        Route::post('/store', [FoodController::class, 'store'])->name('admin.food.store');
        Route::get('/edit/{id?}', [FoodController::class, 'edit'])->name('admin.food.edit');
        Route::post('/update', [FoodController::class, 'update'])->name('admin.food.update');
        Route::get('/delete/{id?}', [FoodController::class, 'destroy'])->name('admin.food.delete');
    });

    Route::group([
        'prefix' => 'category'
    ], function () {
        Route::get('/', [CategoryFoodController::class, 'index'])->name('admin.category_food');
        Route::get('/create', [CategoryFoodController::class, 'create'])->name('admin.category_food.create');
        Route::post('/store', [CategoryFoodController::class, 'store'])->name('admin.category_food.store');
        Route::get('/edit/{id?}', [CategoryFoodController::class, 'edit'])->name('admin.category_food.edit');
        Route::post('/update', [CategoryFoodController::class, 'update'])->name('admin.category_food.update');
        Route::get('/delete/{id?}', [CategoryFoodController::class, 'destroy'])->name('admin.category_food.delete');
    });

    Route::group([
        'prefix' => 'recipe'
    ], function () {
        Route::get('/', [RecipeController::class, 'index'])->name('admin.recipe');
    });

    Route::group([
        'prefix' => 'ingredient'
    ], function () {
        Route::get('/', [IngredientController::class, 'index'])->name('admin.ingredient');
    });

    Route::group([
        'prefix' => 'review'
    ], function () {
        Route::get('/', [ReviewController::class, 'index'])->name('admin.review');
    });
});

Route::group([
    'prefix' => 'customer'
], function () {
    Route::get('/', [IndexController::class, 'index'])->name('customer.index');
    Route::get('/food', [IndexController::class, 'indexFood'])->name('customer.food');
    Route::get('/recipe', [IndexController::class, 'indexRecipe'])->name('customer.recipe');
    Route::post('/review', [IndexController::class, 'createReview'])->name('customer.review.post');
});


