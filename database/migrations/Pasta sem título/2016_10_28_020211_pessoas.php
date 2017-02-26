<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pessoas.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:02:11am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('pessoas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('vinculo');

        $table->String('nome');
        
        $table->String('cep');
        
        $table->String('distrito');
        
        $table->String('bairro');
        
        $table->String('logradouro');
        
        $table->String('numero');
        
        $table->String('complemento');
        
        $table->String('fone');
        
        $table->String('cel1');
        
        $table->String('cel2');
        
        $table->String('email');
        
        $table->String('cpf');
        
        $table->String('rg');
        
        $table->String('expedicao_rg');
        
        $table->String('naturalidade');
        
        $table->String('nascionalidade');
        
        $table->String('nis');
        
        $table->String('escolaridade');
        
        $table->String('data_nascimento');
        
        $table->String('nome_mae');
        
        $table->String('nome_pai');

/**
         * Foreignkeys section
         */

        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('pessoas');
    }
}
