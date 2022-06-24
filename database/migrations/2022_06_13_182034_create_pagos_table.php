<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("forma_pago"); //DIVISAS O BOLIVARES
            $table->string("tipo_pago"); //EFECTIVO O TRANSFERENCIA;
            $table->bigInteger("monto");
            $table->string('comprobante')->nullable();
            $table->string('fecha_vencimiento');
            $table->timestamps();

            $table->foreignId("socio_id")->constrained("socios")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
