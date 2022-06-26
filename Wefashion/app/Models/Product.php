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
        $productsPublished = Product::getPublished();
        $products = $productsPublished->all();
        return $products;
    }

    public static function getProduct(int $id){
        $product = Product::find($id);

        return $product;
    }

    public static function getCategory($id)
    {
        $productsDiscount = Product::getPublished();
        $products = $productsDiscount->where('category_id',$id);
        return $products;
    }

    
    public static function getDiscount()
    {
        $productsDiscount = Product::getPublished();

        $products =$productsDiscount->where('discount', 'En solde');
        return $products;
    }

    public static function getPublished()
    {
        $products = Product::orderBy('created_at', 'desc')->where('published', 'Publié');
        return $products;
    }

}


