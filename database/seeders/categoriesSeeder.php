<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Face',
            'desc' => 'Face treating products'
        ]);

        DB::table('categories')->insert([
            'name' => 'Body',
            'desc' => 'Body skin care products'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hair',
            'desc' => 'Hair treating products'
        ]);

    }
}
