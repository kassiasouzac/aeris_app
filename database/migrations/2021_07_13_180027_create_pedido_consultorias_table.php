<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoConsultoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_consultorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->string('email',320)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha',100);
            $table->string('telefone',11);
            $table->string('nomeEmpresa',200);
            $table->string('descricao',280);
            $table->boolean('statusPedido')->nullable();
            $table->boolean('checkCurso');
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
        Schema::dropIfExists('pedido_consultorias');
    }
}
