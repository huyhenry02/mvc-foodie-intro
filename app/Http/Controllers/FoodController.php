<?php

namespace App\Http\Controllers;

use App\Models\CategoryFood;
use App\Models\Food;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $foods = Food::all();
        return view('admin.food.list',
        [
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = CategoryFood::all();
        return view('admin.food.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['create_user_id'] = auth()->id();
            $food = new Food();
            $food->fill($input);
            $food->save();
            foreach ($input['ingredients'] as $inputIngredient) {
                $ingredient = new Ingredient();
                $inputIngredient['food_id'] = $food->id;
                $ingredient->fill($inputIngredient);
                $ingredient->save();
            }
            foreach ($input['recipes'] as $inputRecipe) {
                $recipe = new Recipe();
                $inputRecipe['food_id'] = $food->id;
                $recipe->fill($inputRecipe);
                $recipe->save();
            }
            DB::commit();
            return redirect()->route('admin.food.index');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $food->ingredients()->delete();
            $food->recipes()->delete();
            $food->delete();
            DB::commit();
            return redirect()->route('admin.food.index');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
