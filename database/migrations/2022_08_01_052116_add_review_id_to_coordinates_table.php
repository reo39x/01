<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReviewIdToCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinates', function (Blueprint $table) {
            $table->integer('review_id')->unsigned();
            // 'review_id' は 'reviewsテーブル' の 'id' を参照する外部キー
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coordinates', function (Blueprint $table) {
            //
        });
    }
}
