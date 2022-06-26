<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $fillable=['name', 'description', 'price', 'visible', 'published', 'discount', 'reference', "category_id" ];


    public function category()
	{
		return $this->belongsTo(Category::class);
	}
    public function picture()
	{
		return $this->hasOne(Picture::class);
	}

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public static function getAll(){
        $products = Product::all();
        return $products;
    }

    public static function getProduct(int $id){
        $product = Product::find($id);

        return $product;
    }


}


