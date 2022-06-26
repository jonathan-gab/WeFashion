<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $NbSize = count(Size::all());
        $ids = range(1 , $NbSize); //faire un tableau 

        Product::factory(80)->create()->each(function ($product) use ($ids,$NbSize) {
            shuffle($ids);
            $product->sizes()->attach(array_slice($ids, 1, rand(1,$NbSize)));

            $categoryFolfer = $product->category_id == 1 ? 'hommes' : 'femmes';
            $files =  Storage::disk('public')->allFiles('/images/' . $categoryFolfer);
            $nbPicture = count($files);
            echo $nbPicture;
            $path = $files[rand(0 , $nbPicture - 1)];
            $product->picture()->create([
				'path'=> $path
			]);
            // $product->associate(Picture::find($product->id));
            $product->save();
        });
    }

}
