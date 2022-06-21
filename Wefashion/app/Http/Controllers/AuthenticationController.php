<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
 
class AuthenticationController{
    public function admin()
    {
        $data= user::latest()->first();
        return view('admin'); // next:- page name created with next.blade.php 
    }
}

