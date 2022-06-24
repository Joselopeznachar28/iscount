<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            
            $table->string('name');
            $table->string('lastname');
            $table->string('typeIdentification');
            $table->string('identification');
            $table->string('email');
            $table->text('address');
            $table->string('status');
            $table->uuid('membership')->unique();
            $table->timestamps();
        });
    }

    /**<    
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
