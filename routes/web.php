<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.layouts.index');
});
