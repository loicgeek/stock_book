<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return  view("contact");
    }

    public function home()
    {
        $products = Product::query()->get();
        return view("welcome", ['products' => $products]);
    }
}
