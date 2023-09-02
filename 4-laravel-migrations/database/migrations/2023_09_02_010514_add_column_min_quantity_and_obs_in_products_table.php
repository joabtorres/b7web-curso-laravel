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
        Schema::table('products', function (Blueprint $table) {
            //criando o campo min_quantity e declarando valor padrão 1
            $table->integer("min_quantity")
                ->default(1)
                ->after("quantity"); //cria depois de quantity

            //criando o campo obs declarando que pode ser nulo
            $table->text('obs')
                ->nullable()
                ->after("min_quantity"); //cria antes do create_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn("obs");
            $table->dropColumn("min_quantity");
        });
    }
};
