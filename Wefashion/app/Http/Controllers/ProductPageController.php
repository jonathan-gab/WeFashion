<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

 
class ProductPageController{
    public function productPage()
    {
        $data= user::latest()->first();
        return view('productPage'); // next:- page name created with next.blade.php 
    }
}
