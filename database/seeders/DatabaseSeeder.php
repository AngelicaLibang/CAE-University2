<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SubjectsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(FacultiesEducTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrdersProductsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(StudentsClassesTableSeeder::class);
        $this->call(StudentsPhotosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
