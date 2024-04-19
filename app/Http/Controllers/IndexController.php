<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.layouts.index');
    }

    public function indexFood(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.list_food');
    }

    public function indexRecipe(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.recipe');
    }

    public function createReview()
    {

    }

}
