<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function(Blueprint $table) {
        $table->increments('id');
        $table->string('categoria');        
        $table->string('titulo');
        $table->string('autor');        
        $table->string('area')->nullable();        
        $table->string('nivel')->nullable();        
        $table->string('genero')->nullable();        
        $table->string('region')->nullable();        
        $table->integer('cant_ejemplares')->unsigned();
        $table->integer('anio')->unsigned()->nullable();
        $table->string('ubicacion');
        $table->string('num_coleccion')->nullable();         
 
        $table->integer('coleccion_id')->unsigned()->nullable();       
        $table->foreign('coleccion_id')->references('id')->on('colecciones');            
      
        $table->integer('editorial_id')->unsigned()->nullable();
        $table->foreign('editorial_id')->references('id')->on('editoriales');

        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('libros');
    }
}
