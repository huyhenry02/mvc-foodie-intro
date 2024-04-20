<?php

namespace App\Http\Controllers;

use App\Models\CategoryFood;
use App\Models\Food;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = CategoryFood::all();
        $firstFood = Food::first();
        $foods = Food::take(4)->get();
        return view('customer.layouts.index',
            [
                'firstFood' => $firstFood,
                'foods' => $foods,
                'categories' => $categories
            ]);
    }

    public function indexFood(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $foods = Food::all();
        return view('customer.list_food', [
            'foods' => $foods
        ]);
    }

    public function indexRecipe(Food $food): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $recipeCount = $food->recipes()->count();
        $ingredients = $food->ingredients;
        $recipes = $food->recipes;
        return view('customer.recipe',
            [
                'food' => $food,
                'recipeCount' => $recipeCount,
                'ingredients' => $ingredients,
                'recipes' => $recipes
            ]);
    }
}
