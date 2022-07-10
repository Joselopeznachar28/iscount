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
            $table->float('quantity');
            $table->float('unitPriceBs');
            $table->float('totalPriceBs');
            $table->float('unitPriceDollar');
            $table->float('totalPriceDollar');
            $table->text('observations');


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
