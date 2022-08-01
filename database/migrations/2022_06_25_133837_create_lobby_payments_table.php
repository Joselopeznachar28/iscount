<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLobbyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lobby_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forma_pago');
            $table->string('tipo_pago');
            $table->bigInteger('monto');
            $table->uuid('lobby_payment_id')->unique();
            $table->text('comprobante');
            $table->dateTime('fecha_pago');
            $table->dateTime('fecha_vencimiento');
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
        Schema::dropIfExists('lobby_payments');
    }
}