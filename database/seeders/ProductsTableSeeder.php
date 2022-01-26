<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Camera',
                'description' => 'Camera of photos Polaroid',
                'slug' => 'camera-polaroid',
                'price' => 100,
                'image' => 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'brand' => 'Polaroid',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Glasses',
                'description' => 'RAY BAN WAYFARER 2140',
                'slug' => 'glasses-ray-ban',
                'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80',
                'brand' => 'Ray-Ban',
                'price' => 200,
                'category_id' => 2,
                'created_at' => now(),
            ], [
                'name' => 'Zapatillas',
                'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'brand' => 'Nike',
                'price' => 300,
                'description' => 'Zapatillas de correr',
                'slug' => 'zapatillas-nike',
                'category_id' => 5,
                'created_at' => now(),
            ], [
                'name' => 'Laptop',
                'image' => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'brand' => 'HP',
                'price' => 1400,
                'description' => 'Laptop 16GB RAM, Intel Core i7, 1TB SSD',
                'slug' => 'laptop-hp',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Smartphone',
                'image' => 'https://images.unsplash.com/photo-1533228100845-08145b01de14?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=438&q=80',
                'brand' => 'Samsung',
                'price' => 800,
                'description' => 'Smartphone de telefono',
                'slug' => 'smartphone-samsung',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Tablet',
                'image' => 'https://images.unsplash.com/photo-1589739900593-8b1b925ee197?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'brand' => 'Samsung',
                'price' => 1000,
                'description' => 'Tablet de telefono',
                'slug' => 'tablet-samsung',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Smartphone',
                'image' => 'https://images.unsplash.com/photo-1517765371796-5bd3a7d30a29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'brand' => 'Apple',
                'price' => 900,
                'description' => 'Smartphone de telefono',
                'slug' => 'smartphone-apple',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Bicicleta',
                'image' => 'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=822&q=80',
                'brand' => 'Bicicleta',
                'price' => 100,
                'description' => 'Bicicleta de montaña',
                'slug' => 'bicicleta-montania',
                'category_id' => 5,
                'created_at' => now(),
            ], [
                'name' => 'Auriculares',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'brand' => 'Sony',
                'price' => 180,
                'description' => 'Auriculares bluetooth',
                'slug' => 'auriculares-sony',
                'category_id' => 1,
                'created_at' => now(),
            ], [
                'name' => 'Perfume',
                'image' => 'https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
                'brand' => 'Chanel',
                'price' => 300,
                'description' => 'Perfume de marca Chanel',
                'slug' => 'perfume-chanel',
                'category_id' => 2,
                'created_at' => now(),                
            ], [
                'name' => 'Coca-Cola',
                'image' => 'https://images.unsplash.com/photo-1591254674198-a316f1aa8301?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
                'brand' => 'Coca-Cola',
                'price' => 100,
                'description' => 'Gaseosa Coca-Cola',
                'slug' => 'coca-cola',
                'category_id' => 3,
                'created_at' => now(),                
            ],
            [
                'name' => 'Cerveza',
                'image' => 'https://images.unsplash.com/photo-1600213903598-25be92abde40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'brand' => 'Corona',
                'price' => 100,
                'description' => 'Cerveza de marca Corona',
                'slug' => 'cerveza-corona',
                'category_id' => 3,
                'created_at' => now(),
            ],
            [
                'name' => 'Cerveza',
                'image' => 'https://images.unsplash.com/photo-1619700951946-2e2416825027?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80',
                'brand' => 'Heineken',
                'price' => 100,
                'description' => 'Cerveza de marca Heineken',
                'slug' => 'cerveza-heineken',
                'category_id' => 3,
                'created_at' => now(),
            ],
            [
                'name' => 'Cerveza',
                'image' => 'https://images.unsplash.com/photo-1642647095389-5e62882f32b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
                'brand' => 'Budweiser',
                'price' => 100,
                'description' => 'Cerveza de marca Budweiser',
                'slug' => 'cerveza-budweiser',
                'category_id' => 3,
                'created_at' => now(),
            ],
            [
                'name' => 'Joystick',
                'image' => 'https://images.unsplash.com/photo-1600080972464-8e5f35f63d08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
                'brand' => 'X-Box',
                'price' => 250,
                'description' => 'Joystick de marca X-Box',
                'slug' => 'joystick-xbox',
                'category_id' => 1,
                'created_at' => now(),
            ],
            [
                'name' => 'Joystick',
                'image' => 'https://images.unsplash.com/photo-1617096200347-cb04ae810b1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                'brand' => 'Nintendo',
                'price' => 250,
                'description' => 'Joystick de marca Nintendo',
                'slug' => 'joystick-nintendo',
                'category_id' => 1,
                'created_at' => now(),
            ]
        ];

        \App\Models\Product::insert($products);
    }
}
