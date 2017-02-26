<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Funcionarios.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:13:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Funcionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('funcionarios',function (Blueprint $table){

        $table->increments('id');

        $table->String('adicionado_por');
        
        $table->String('vinculo');
        
        $table->String('status_funcionario');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
        $table->integer('ocupacao_id')->unsigned()->nullable();
        $table->foreign('ocupacao_id')->references('id')->on('ocupacaos')->onDelete('cascade');
        
        $table->integer('pessoa_id')->unsigned()->nullable();
        $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        
        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('funcionarios');
    }
}
