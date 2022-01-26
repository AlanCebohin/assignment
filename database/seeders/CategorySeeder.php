<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Electronics devices',
                'created_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Fashion items',
                'created_at' => now(),
            ],
            [
                'name' => 'Food',
                'slug' => 'food',
                'description' => 'Food items',
                'created_at' => now(),
            ],
            [
                'name' => 'Home',
                'slug' => 'home',
                'description' => 'Home items',
                'created_at' => now(),
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'description' => 'Sports items',
                'created_at' => now(),
            ],
            [
                'name' => 'Toys',
                'slug' => 'toys',
                'description' => 'Toys items',
                'created_at' => now(),
            ],
            [
                'name' => 'Clothes',
                'slug' => 'clothes',
                'description' => 'Clothes items',
                'created_at' => now(),
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Books items',
                'created_at' => now(),
            ]
        ];

        \App\Models\Category::insert($categories);
    }
}
