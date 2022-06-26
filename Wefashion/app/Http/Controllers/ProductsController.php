<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        
        $products = Product::getAll();
        return view('client.products', [
            'products' => $products,
        ]);
    }

    public function getDetailsProduct(int $id)
    {
        $product = Product::getProduct($id);
       
        return view('client.product', [
            'product' => $product,
        ]);
    }
}
