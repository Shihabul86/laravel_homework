<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProduct($name, $model): string
    {
        return 'Product Name: '.$name. '<br>Model Number:'.$model;
    }
}
