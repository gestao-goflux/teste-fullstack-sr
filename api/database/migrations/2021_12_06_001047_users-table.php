<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('role');
        });

        DB::table('users')->insert(
            array(
                'name' => 'Transportador 1',
                'email' => 'transportador1@example.org',
                'password' => Hash::make('12345'),
                'role' => 'transfer'
            ),
        );

        DB::table('users')->insert(
            array(
                'name' => 'Transportador 2',
                'email' => 'transportador2@example.org',
                'password' => Hash::make('12345'),
                'role' => 'transfer'
            ),
        );

        DB::table('users')->insert(
            array(
                'name' => 'Embarcador 1',
                'email' => 'embarcador1@example.org',
                'password' => Hash::make('12345'),
                'role' => 'shipper'
            ),
        );

        DB::table('users')->insert(
            array(
                'name' => 'Embarcador 2',
                'email' => 'embarcador2@example.org',
                'password' => Hash::make('12345'),
                'role' => 'shipper'
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
        Schema::dropIfExists('users');
    }
}
