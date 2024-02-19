<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_products')->delete();
        
        \DB::table('orders_products')->insert(array (
            0 => 
            array (
                'op_id' => 1,
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 2,
            ),
            1 => 
            array (
                'op_id' => 2,
                'order_id' => 1,
                'product_id' => 4,
                'quantity' => 1,
            ),
            2 => 
            array (
                'op_id' => 3,
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 1,
            ),
            3 => 
            array (
                'op_id' => 4,
                'order_id' => 2,
                'product_id' => 5,
                'quantity' => 2,
            ),
            4 => 
            array (
                'op_id' => 5,
                'order_id' => 3,
                'product_id' => 2,
                'quantity' => 1,
            ),
            5 => 
            array (
                'op_id' => 6,
                'order_id' => 4,
                'product_id' => 4,
                'quantity' => 1,
            ),
            6 => 
            array (
                'op_id' => 7,
                'order_id' => 5,
                'product_id' => 4,
                'quantity' => 2,
            ),
            7 => 
            array (
                'op_id' => 8,
                'order_id' => 5,
                'product_id' => 5,
                'quantity' => 1,
            ),
            8 => 
            array (
                'op_id' => 9,
                'order_id' => 6,
                'product_id' => 3,
                'quantity' => 38,
            ),
            9 => 
            array (
                'op_id' => 10,
                'order_id' => 7,
                'product_id' => 3,
                'quantity' => 1,
            ),
            10 => 
            array (
                'op_id' => 11,
                'order_id' => 7,
                'product_id' => 4,
                'quantity' => 1,
            ),
            11 => 
            array (
                'op_id' => 12,
                'order_id' => 7,
                'product_id' => 5,
                'quantity' => 1,
            ),
            12 => 
            array (
                'op_id' => 13,
                'order_id' => 8,
                'product_id' => 4,
                'quantity' => 6,
            ),
        ));
        
        
    }
}