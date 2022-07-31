<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count = 0; $count < 20; $count++)
        {
            DB::table('items')->insert([
                'name' => Str::random(10),
                'price' => rand(2000, 5000),
                'shop_id' => rand(1,3),
                'category_id' => rand(1, 8)
            ]);
        }
    }
}
