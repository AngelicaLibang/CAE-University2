<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'Kanin & Leeg',
                'price' => 40.0,
                'stock' => 100,
                'image' => 'kanin-leeg.jpg',
            ),
            1 => 
            array (
                'product_id' => 2,
                'name' => 'Fillet Mignon',
                'price' => 1000.0,
                'stock' => 100,
                'image' => 'filet-mignon.jpeg',
            ),
            2 => 
            array (
                'product_id' => 3,
                'name' => 'Fried Chicken',
                'price' => 80.0,
                'stock' => 100,
                'image' => 'fried-chicken.webp',
            ),
            3 => 
            array (
                'product_id' => 4,
                'name' => 'Sprite',
                'price' => 25.0,
                'stock' => 100,
                'image' => 'sprite.webp',
            ),
            4 => 
            array (
                'product_id' => 5,
                'name' => 'Banana',
                'price' => 10.0,
                'stock' => 100,
                'image' => '202401240240000000banana.webp',
            ),
        ));
        
        
    }
}