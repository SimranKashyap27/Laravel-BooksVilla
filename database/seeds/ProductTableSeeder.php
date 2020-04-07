<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = App\Product::create();

        DB::table('products')->insert([
        'imagePath' => 'https://images-eu.ssl-images-amazon.com/images/I/51OpxOAwPQL.jpg',
        'title' => 'Nichelle Clarke Crime Thrillers',
        'description' => 'THE FIRST THREE BOOKS OF THE NICHELLE CLARKE CRIME THRILLER SERIES. From award-winning journalist and bestselling author LynDee Walker..
                            Book 1: Front Page Fatality 
                            Book 2: Buried Leads<br>Book 
                            Book 3: Small Town Spin.',
        'price' => 10
        ]);
        $product->save();
    
        DB::table('products')->insert([
            'imagePath' => 'https://images.gr-assets.com/books/1478886078l/29749085.jpg',
        'title' => 'Wonder Woman: Warbringer',
        'description' => 'Princess Diana longs to prove herself to her legendary warrior sisters. But when the opportunity 
                        finally comes, she throws away her chance at glory and breaks Amazon lawrisking exileto save a mortal.
                        Diana will soon learn that she has rescued no ordinary girl, and that with this single brave act, she 
                        may have doomed the world.',
        'price' => 15
         ]);
         $product->save();
   
         DB::table('products')->insert([
            'imagePath' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1494964205l/11790297._SY475_.jpg',
        'title' => 'The Greatness Guide',
        'description' => 'Waldrons Gate, capital of Alterra. A land powered by steam, but inspired by 
                        the power of dreams, and surrounded by the mysterious Fog.The Dream Engine explored this city. 
                        From time travel to romance, young adult to horror, science fiction to historical fantasy, you will discover tales that delight, intrigue, 
                        and maybe even shock you.This is only the beginning.',
        'price' => 12
        ]);
        $product->save();
    }
}
