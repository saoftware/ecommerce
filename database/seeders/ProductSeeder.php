<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LG mobile',
            'price' => '200',
            'description' => 'Smartphone android',
            'category' => 'android',
            'gallery' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880',
        ]);

        Product::create([
            'name' => 'Ordinateur de bureau',
            'price' => '300',
            'description' => 'Ordinateur de bureau',
            'category' => 'Desktop',
            'gallery' => 'https://images.unsplash.com/photo-1614624532983-4ce03382d63d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331',
        ]);

        Product::create([
            'name' => 'Ordinateur de bureau',
            'price' => '350',
            'description' => 'rdinateur de bureau avec éclairage',
            'category' => 'Desktop',
            'gallery' => 'https://images.unsplash.com/photo-1529336953128-a85760f58cb5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170',
        ]);

        Product::create([
            'name' => 'Mobile Classic',
            'price' => '150',
            'description' => 'Mobile classic à usage simplifié',
            'category' => 'mobile',
            'gallery' => 'https://images.unsplash.com/photo-1543069190-9d380c458bc2?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764',
        ]);

        Product::create([
            'name' => 'Bureau',
            'price' => '500',
            'description' => 'Bureau et PC',
            'category' => 'bureau',
            'gallery' => 'https://images.unsplash.com/photo-1552501684-c441323557ba?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764',
        ]);

    }
}