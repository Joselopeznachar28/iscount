<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->uuid('budget_id')->unique();
            $table->text('observations');
            $table->boolean('is_Winner')->default(false);


            $table->foreignId('acquisition_id')->constrained('acquisitions')->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('provider_id')->constrained('providers')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('budgets');
    }
}
