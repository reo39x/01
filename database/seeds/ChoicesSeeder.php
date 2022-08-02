<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
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
                'choice' => '好き'
            ],
            [
                'choice' => '嫌い'
            ]
        ];

        foreach ($params as $param)
        {
            DB::table('choices')->insert($param);
        }
    }
}
