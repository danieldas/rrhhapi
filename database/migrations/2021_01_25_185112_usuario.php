<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {

            $table->increments('id');
            $table->string('cuenta', 20);
            $table->string('password', 200);
            $table->enum('rol', [
                'Administrador',
                'Funcionario',

            ])->default('Funcionario');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('ci', 20);
            $table->boolean('alta')->default(true);

            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
