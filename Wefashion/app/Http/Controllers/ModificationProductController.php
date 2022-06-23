<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
 
class ModificationProductController{
    public function modificationController()
    {
        $data= user::latest()->first();
        return view('modificationController'); // next:- page name created with next.blade.php 
    }
}
