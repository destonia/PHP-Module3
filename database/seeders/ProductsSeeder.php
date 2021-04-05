<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'dieu qua the luon';
        $product->category_id = '2';
        $product->desc = 'dieu toa';
        $product->content = 'dieu that su';
        $product->price = 123;
        $product->quantity = 123;
       /*DB::Table('products')->insert([
           'name'=>'s101.2320',
           'category_id' => 2,
           'desc' => 'nice view',
           'content' => 'You can view all the stuff in the central',
           'price' => '121.000$',
           'quantity' => '100'
    ]);
        DB::Table('products')->insert([
            'name'=>'sh.ruby 23',
            'category_id' => 1,
            'desc' => 'dream house',
            'content' => 'The house you always dreamed of',
            'price' => '323.000$',
            'quantity' => '100'
        ]);
        DB::Table('products')->insert([
            'name'=>'s2021001',
            'category_id' => 1,
            'desc' => 'flat',
            'content' => 'Good for relax after a tired day',
            'price' => '50.000$',
            'quantity' => '100'
        ]);*/
    }
}
