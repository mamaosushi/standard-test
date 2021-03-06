<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->boolean('gender')->comment('1.男性2.女性');
            $table->string('email');
            $table->char('postcode');
            $table->string('address');
            $table->string('building_name')->nullable();
            $table->text('opinion');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}