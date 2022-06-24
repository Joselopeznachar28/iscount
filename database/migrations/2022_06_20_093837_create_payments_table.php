<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forma_pago');
            $table->string('tipo_pago');
            $table->float('monto');
            $table->uuid('payment_id')->unique();
            $table->text('comprobante');
            $table->date('fecha_pago');
            $table->date('fecha_vencimiento');
            $table->text('descripcion');
            $table->foreignId('socio_id')->constrained('socios')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
