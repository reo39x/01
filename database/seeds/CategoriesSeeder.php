<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params =
        [
            [
                'name' => 'トップス'
            ],
            [
                'name' => 'アウター'
            ],
            [
                'name' => 'ボトムス'
            ],
            [
                'name' => 'ソックス'
            ],
            [
                'name' => 'シューズ'
            ],
            [
                'name' => 'バック'
            ],
            [
                'name' => 'アクセサリー'
            ]
        ];

        foreach ($params as $param)
        {
            DB::table('categories')->insert($param);
        }
    }
}
