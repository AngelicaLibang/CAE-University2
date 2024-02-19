<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'notif_id' => 2,
                'content' => 'Your delivery is arriving soon. Please prepare the exact amount for payment. Thank you!

- CAE Cafeteria',
                'date_sent' => '2024-01-29 00:00:00',
                'marked_seen' => 1,
                'redirect' => '/orders',
                'user_id' => 2,
            ),
            1 => 
            array (
                'notif_id' => 3,
                'content' => 'Welcome to the CAE website! Check out the links on your navigation bar.

- CAE University',
                'date_sent' => '2024-01-30 10:05:55',
                'marked_seen' => 1,
                'redirect' => '/',
                'user_id' => 2,
            ),
            2 => 
            array (
                'notif_id' => 4,
                'content' => 'Your order is on the way! Please be ready with your payment.',
                'date_sent' => '2024-01-30 14:40:35',
                'marked_seen' => 1,
                'redirect' => '/orders/8',
                'user_id' => 2,
            ),
        ));
        
        
    }
}