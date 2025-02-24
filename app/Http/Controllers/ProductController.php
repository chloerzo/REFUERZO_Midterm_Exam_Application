<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Inception', 'genre' => 'Sci-Fi'],
            ['title' => 'The Matrix', 'genre' => 'Action'],
            ['title' => 'Taken', 'genre' => 'Action'],
        ];

        return view('products.index', compact('products'));
    }
}
