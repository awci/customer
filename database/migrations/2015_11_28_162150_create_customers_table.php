<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('user_id_edit');
            $table->string('first_letter_name', 10);
            $table->string('fullname');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->string('near_fullname');
            $table->string('near_phone');
            $table->text('address');
            $table->text('content');
            $table->string('status');
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
        Schema::drop('customers');
    }
}
