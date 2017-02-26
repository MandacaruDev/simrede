<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Turmas.
 *
 * @author  The scaffold-interface created at 2016-12-21 02:15:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Turmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('turmas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('turno');
        
        $table->String('nivel');
        
        $table->String('serie');
        
        $table->String('turma');
        
        $table->String('seg1');
        
        $table->String('ter1');
        
        $table->String('qua1');
        
        $table->String('qui1');
        
        $table->String('sex1');
        
        $table->String('sab1');
        
        $table->String('seg2');
        
        $table->String('ter2');
        
        $table->String('qua2');
        
        $table->String('qui2');
        
        $table->String('sex2');
        
        $table->String('sab2');
        
        $table->String('seg3');
        
        $table->String('ter3');
        
        $table->String('qua3');
        
        $table->String('qui3');
        
        $table->String('sex3');
        
        $table->String('sab3');
        
        $table->String('seg4');
        
        $table->String('ter4');
        
        $table->String('qua4');
        
        $table->String('qui4');
        
        $table->String('sex4');
        
        $table->String('sab4');
        
        $table->String('seg5');
        
        $table->String('ter5');
        
        $table->String('qua5');
        
        $table->String('qui5');
        
        $table->String('sex5');
        
        $table->String('sab5');
        
        $table->String('seg6');
        
        $table->String('ter6');
        
        $table->String('qua6');
        
        $table->String('qui6');
        
        $table->String('sex6');
        
        $table->String('sab6');
        
        $table->String('adicionado_por');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('turmas');
    }
}
