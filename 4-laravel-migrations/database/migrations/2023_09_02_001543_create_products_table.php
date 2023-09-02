<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //id do registro, auto_increment e primary key
            $table->id();
            //nome do produto (name) = string
            $table->string("name");
            //Código do produto (code) - string - não pode repetir
            $table->string("code")->unique();
            //quantidade do produto (quantity) - integer - valor padrão 0
            $table->integer("quantity")->default(0);
            
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
        Schema::dropIfExists('products');
    }
};
