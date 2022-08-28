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
        $params =
        [
            [
                'name' => "2Wayボウタイバンドカラーブラウス",
                'price' => 1999,
                'shop_id' => 1,
                'category_id' => 1
            ],
            [
                'name' => "モックネック フリル詳細 トップス",
                'price' => 744,
                'shop_id' => 2,
                'category_id' => 1
            ],
            [
                'name' => "タイネック パフスリーブ ブラウス",
                'price' => 1858,
                'shop_id' => 2,
                'category_id' => 1
            ],
            [
                'name' => "ボリュームスリーブショートニットカーディガン",
                'price' => 2099,
                'shop_id' => 1,
                'category_id' => 2
            ],
            [
                'name' => "花柄レースフリルカーディガン",
                'price' => 1299,
                'shop_id' => 1,
                'category_id' => 2
            ],
            [
                'name' =>"千鳥格子柄 フラップポケット オーバーコート",
                'price' => 3181,
                'shop_id' => 2,
                'category_id' => 2
            ],
            [
                'name' => "千鳥柄台形ミニスカート",
                'price' => 799,
                'shop_id' => 1,
                'category_id' => 3
            ],
            [
                'name' => "マーメイドフレアスカート",
                'price' => 1599,
                'shop_id' => 1,
                'category_id' => 3
            ],
            [
                'name' => "ツイード ラップ ボタンフロント スコート",
                'price' => 1334,
                'shop_id' => 2,
                'category_id' => 3
            ],
            [
                'name' => "ソリッドクルーソックス",
                'price' => 148,
                'shop_id' => 2,
                'category_id' => 4
            ],
            [
                'name' => "フリルトリム クルーソックス",
                'price' => 174,
                'shop_id' => 2,
                'category_id' => 4
            ],
            [
                'name' => "厚底スクエアトゥレザーシューズ",
                'price' => 1399,
                'shop_id' => 1,
                'category_id' => 5
            ],
            [
                'name' => "パールデコレーション チャンキーヒール メリージェーンパンプス",
                'price' => 2765,
                'shop_id' => 2,
                'category_id' => 5
            ],
            [
                'name' => "キルティングチェーンミニショルダーバッグ",
                'price' => 1799,
                'shop_id' => 1,
                'category_id' => 6
            ],
            [
                'name' => "パールデコレーション チャンキーヒール メリージェーンパンプス",
                'price' => 2765,
                'shop_id' => 2,
                'category_id' => 6
            ],
            [
                'name' => "蝶々結びデコレーション スクエアトゥ バレエシューズ",
                'price' => 1507,
                'shop_id' => 2,
                'category_id' => 6
            ],
            [
                'name' => "花モチーフパールビジューチェーンピアス",
                'price' => 999,
                'shop_id' => 1,
                'category_id' => 7
            ],
            [
                'name' => "サテンリボンバレッタ",
                'price' => 799,
                'shop_id' => 1,
                'category_id' => 7
            ],
            [
                'name' => "ラインストーンデコレーション ワイドヘッドバンド",
                'price' => 457,
                'shop_id' => 2,
                'category_id' => 7
            ],
            [
                'name' => "人工パール ＆ ラインストーンデコレーション 蝶々結びへクリップ",
                'price' => 238,
                'shop_id' => 2,
                'category_id' => 7
            ],
            
        ];

        foreach ($params as $param)
        {
            DB::table('items')->insert($param);
        }
    }
}
