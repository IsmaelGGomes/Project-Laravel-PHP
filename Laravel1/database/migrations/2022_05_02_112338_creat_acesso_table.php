<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatAcessoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acesso', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->string('name',100);
        $table->string('email',100);
        $table->string('senha',100);
        $table->string('setor',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acesso');
    }
}
