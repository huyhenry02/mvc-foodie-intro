<?php

namespace App\Http\Controllers;

use App\Models\CategoryFood;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
         $categoryFoods = CategoryFood::all();
            return view('admin.category_food.list', [
                'categoryFoods' => $categoryFoods
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.category_food.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $categoryFood = new CategoryFood();
        $categoryFood->fill($input);
        $categoryFood->save();
        return redirect()->route('admin.category_food.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryFood $categoryFood): RedirectResponse
    {
        $categoryFood->delete();
        return redirect()->route('admin.category_food.index');
    }
}
