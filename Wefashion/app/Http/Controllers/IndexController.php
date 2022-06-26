<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

 
class IndexController{
    public function index()
    {
        $data= user::latest()->first();
        return view('index'); // next:- page name created with next.blade.php 
    }
}
