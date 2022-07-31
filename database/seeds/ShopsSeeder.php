<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
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
                'name' => 'GRL',
                'shop_url' => 'https://www.grail.bz/'
            ],
            [
                'name' => 'SHEIN',
                'shop_url' => 'https://jp.shein.com/'
            ]
        ];

        foreach ($params as $param)
        {
            DB::table('shops')->insert($param);
        }
    }
}
