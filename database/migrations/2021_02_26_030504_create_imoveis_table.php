<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('tipo_id')->nullable();

            $table->string('nome', 100);
            $table->text('descricao');
            $table->char('tag', 30)->nullable();

            $table->string('tag_title', 60)->nullable();
            $table->string('tag_description', 160)->nullable();
            $table->string('tag_keywords', 150)->nullable();

            $table->char('incorporador', 50)->nullable();
            $table->string('projeto_arquitetonico', 50)->nullable();
            $table->char('obra_entrega', 10)->nullable();
            $table->smallInteger('torres')->nullable();
            $table->smallInteger('pavimento_terreo')->nullable();
            $table->smallInteger('pavimento_tipo')->nullable();
            $table->smallInteger('pavimento_cobertura')->nullable();
            $table->smallInteger('unidade_pavimento')->nullable();
            $table->smallInteger('total_unidade')->nullable();
            $table->char('dormitorios', 10);
            $table->char('banheiros', 10);
            $table->smallInteger('elevadores')->nullable();
            $table->char('area_privativa', 15)->nullable();
            $table->char('area_terreno', 15)->nullable();
            $table->smallInteger('subsolo')->nullable();

            $table->string('imagem', 100);
            $table->string('logo', 100)->nullable();
            $table->char('video', 50)->nullable();
            $table->string('tour_virtual', 150)->nullable();
            
            $table->char('cep', 15)->nullable();
            $table->string('endereco', 200);
            $table->string('lougradouro', 80);
            $table->char('numero', 10)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 60);
            $table->string('estado', 50);
            $table->string('latitude', 50);
            $table->string('longitude', 50);

            $table->boolean('status')->nullable(); 
            $table->boolean('view_home')->nullable();
            $table->smallInteger('order_home')->nullable();
            $table->string('slug', 100);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
