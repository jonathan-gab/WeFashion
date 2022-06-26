<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        view()->composer('partials.clientNavbar', function($view){
            $categories = Category::getAll();
            $view->with('categories', $categories);
        });
    }
    public function index()
    {
        
        $products = Product::getPublished();
        $productsPaginate = $products->paginate(6);
        $count = $productsPaginate->total();
        return view('client.products', [
            'products' => $productsPaginate,
            'count' => $count
        ]);
    }

    public function getDetailsProduct(int $id)
    {
        $product = Product::getProduct($id);
       
        return view('client.product', [
            'product' => $product,
        ]);
    }

    public function getCategoryProduct(int $id)
    {   
        $products = Product::getCategory($id);
        $productsPagination = $products->paginate(6);
        $category = Category::getById($id);
        $count = $productsPagination->total();
       

        return view('client.category', [
            'products' => $productsPagination,
            'category' => $category,
            'count'=> $count
        ]);
    }

    public function getDiscountProduct()
    {
        $products = Product::getDiscount();
        $productsPagination = $products->paginate(6);
        $count = $productsPagination->total();
        return view(
            'client.discount', 
            [
                'products' => $productsPagination,
                'count'=> $count
            ]
        );
    }


}
