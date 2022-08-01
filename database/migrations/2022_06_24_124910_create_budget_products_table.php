<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->float('quantity');
            $table->float('unitPriceBs');
            $table->float('totalPriceBs');
            $table->float('unitPriceDollar');
            $table->float('totalPriceDollar');
            
            $table->foreignId('budget_id')->constrained('budgets')->onUpdate('cascade')->onDelete('cascade'); 

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
        Schema::dropIfExists('budget_products');
    }
}
