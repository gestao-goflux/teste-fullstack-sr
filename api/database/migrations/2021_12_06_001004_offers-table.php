<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class OffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name');
            $table->integer('quantity');
            $table->string('current_address');
            $table->string('destiny_address');
            $table->boolean('accepted_order')->nullable();
            $table->integer('user_id');

            $table->foreign('accepted_order')
                ->references('orders')
                ->on('id');

            $table->foreign('user_id')
                ->references('users')
                ->on('id');
        });

        DB::table('offers')->insert(
            array(
                'name' => 'Soja',
                'quantity' => '100',
                'current_address' => 'Rua Maria dos Anjos, Itaipó, Curitiba/PR - 80.987-989',
                'destiny_address' => 'Rua Carolina Mesquita, Curubá, São Paulo/SP - 45.777-321',
                'user_id' => 3
            ),
        );

        DB::table('offers')->insert(
            array(
                'name' => 'Ervilha',
                'quantity' => '1000',
                'current_address' => 'Rua Faria Lima, Duralinda, Bahia/BH - 55.434-989',
                'destiny_address' => 'Rua Carolina Mesquita, Curubá, São Paulo/SP - 44.767-331',
                'accepted_order' => 1,
                'user_id' => 3
            ),
        );

        DB::table('offers')->insert(
            array(
                'name' => 'Amoras',
                'quantity' => '10',
                'current_address' => 'Rua Coronel Cardoso, Fronteira, Acessor/PR - 44.878-000',
                'destiny_address' => 'Rua Carolina Mesquita, Fronteira, Acessor/PR - 43.777-999',
                'user_id' => 3
            ),
        );

        DB::table('offers')->insert(
            array(
                'name' => 'Carrinhos',
                'quantity' => '400',
                'current_address' => 'Rua Maria dos Anjos, Itaipó, Curitiba/PR - 80.987-989',
                'destiny_address' => 'Rua Carolina Mesquita, Curubá, São Paulo/SP - 45.777-321',
                'user_id' => 4
            ),
        );

        DB::table('offers')->insert(
            array(
                'name' => 'Bonecas',
                'quantity' => '10000',
                'current_address' => 'Rua Faria Lima, Duralinda, Bahia/BH - 55.434-989',
                'destiny_address' => 'Rua Carolina Mesquita, Curubá, São Paulo/SP - 44.767-331',
                'accepted_order' => 2,
                'user_id' => 4
            ),
        );

        DB::table('offers')->insert(
            array(
                'name' => 'Quebra cabeça',
                'quantity' => '300',
                'current_address' => 'Rua Coronel Cardoso, Fronteira, Acessor/PR - 44.878-000',
                'destiny_address' => 'Rua Carolina Mesquita, Fronteira, Acessor/PR - 43.777-999',
                'user_id' => 4
            ),
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
