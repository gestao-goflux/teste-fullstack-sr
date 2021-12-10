<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('price');
            $table->integer('quantity');
            $table->integer('offer_id');
            $table->integer('user_id');
            $table->boolean('accepted')->nullable();

            $table->foreign('offer_id')
                ->references('offers')
                ->on('id');

            $table->foreign('user_id')
                ->references('users')
                ->on('id');
        });

        DB::table('orders')->insert(
            array(
                'price' => '400,00',
                'quantity' => '100',
                'offer_id' => 1,
                'user_id' => 1
            ),
        );

        DB::table('orders')->insert(
            array(
                'price' => '400,00',
                'quantity' => '1000',
                'offer_id' => 5,
                'user_id' => 2
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
