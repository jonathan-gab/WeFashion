<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    public function categories()
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


    protected $fillable=['name', 'description', 'price', 'visible', 'published', 'discount', 'reference', "category_id" ];


}


