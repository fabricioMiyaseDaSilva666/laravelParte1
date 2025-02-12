<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//Ela é usada pra cirar a tabela de banco de dados
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dataEvento');
            $table->longText('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void//Isso ele só serve para apaga uma tabela caso ja tenha um com o mesmo nome
    {
        Schema::dropIfExists('registro');
    }
};
