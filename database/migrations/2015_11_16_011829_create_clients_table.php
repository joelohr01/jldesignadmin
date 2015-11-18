<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name')->unique();
            $table->string('client_first_name');
            $table->string('client_last_name');
            $table->string('client_address');
            $table->string('client_city');
            $table->string('client_state');
            $table->string('client_zip');
            $table->string('client_phone');
            $table->string('client_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
