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
        //
        $product = new Product();
        $product->name = 'Macbook Pro';
        $product->description = 'San pham co ma so 001';
        $product->price = 1.5;
        $product->view_count = 0;
        $product->save();

        $product = new Product();
        $product->name = 'Kindel Oasis';
        $product->description = 'San pham co ma so 002';
        $product->price = 2.5;
        $product->view_count = 0;
        $product->save();

        $product = new Product();
        $product->name = 'Iphone 12 mini';
        $product->description = 'San pham co ma so 003';
        $product->price = 3.5;
        $product->view_count = 0;
        $product->save();
    }
}
