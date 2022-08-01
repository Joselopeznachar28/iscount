<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forma_pago');
            $table->string('tipo_pago');
            $table->uuid('budget_payment_id')->unique();
            $table->bigInteger('monto');
            $table->text('comprobante');
            $table->dateTime('fecha_pago');
            $table->text('descripcion');

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
        Schema::dropIfExists('budget_payments');
    }
}
