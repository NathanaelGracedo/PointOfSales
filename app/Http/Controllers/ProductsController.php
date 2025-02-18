<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $categories = [
            ['name' => 'Food & Beverage', 'slug' => 'food-beverage'],
            ['name' => 'Beauty & Health', 'slug' => 'beauty-health'],
            ['name' => 'Home Care', 'slug' => 'home-care'],
            ['name' => 'Baby & Kid', 'slug' => 'baby-kid'],
        ];
        return view('products.index', compact('categories'));
    }

    public function foodBeverage() {
        return view('products.food-beverage');
    }

    public function beautyHealth() {
        return view('products.beauty-health');
    }

    public function homeCare() {
        return view('products.home-care');
    }

    public function babyKid() {
        return view('products.baby-kid');
    }
}
