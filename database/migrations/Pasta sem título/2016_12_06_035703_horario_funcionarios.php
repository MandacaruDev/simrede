<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Horario_funcionarios.
 *
 * @author  The scaffold-interface created at 2016-12-06 03:57:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class HorarioFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('horario_funcionarios',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('seg_m');
        
        $table->String('ter_m');
        
        $table->String('qua_m');
        
        $table->String('qui_m');
        
        $table->String('sex_m');
        
        $table->String('sab_m');
        
        $table->String('dom_m');
        
        $table->String('seg_t');
        
        $table->String('ter_t');
        
        $table->String('qua_t');
        
        $table->String('qui_t');
        
        $table->String('sex_t');
        
        $table->String('sab_t');
        
        $table->String('dom_t');
        
        $table->String('seg_n');
        
        $table->String('ter_n');
        
        $table->String('qua_n');
        
        $table->String('qui_n');
        
        $table->String('sex_n');
        
        $table->String('sab_n');
        
        $table->String('dom_n');
        
        $table->String('seg_c');
        
        $table->String('ter_c');
        
        $table->String('qua_c');
        
        $table->String('qui_c');
        
        $table->String('sex_c');
        
        $table->String('sab_c');
        
        $table->String('dom_c');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
        $table->integer('pessoa_id')->unsigned()->nullable();
        $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        
        
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
        Schema::drop('horario_funcionarios');
    }
}
