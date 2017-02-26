<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Escolas.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:10:40am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Escolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('escolas',function (Blueprint $table){

        $table->increments('id');

        $table->String('vinculo');
        
        $table->String('inep');
        
        $table->String('cep');
        
        $table->String('distrito');
        
        $table->String('bairro');
        
        $table->String('logradouro');
        
        $table->String('numero');
        
        $table->String('complemento');
        
        $table->String('fone');
        
        $table->String('email');
        
        $table->String('cel1');
        
        $table->String('cel2');
        
        $table->String('sigla');
        
        $table->String('possui_internet_escola');
        
        $table->String('tipo_internet_escola');
        
        $table->String('status_escola');
        
        $table->String('possui_lab');
        
        $table->String('possui_analista');
        
        $table->String('tipo_sala');
        
        $table->String('pregao1');
        
        $table->String('pregao2');
        
        $table->String('pregao3');
        
        $table->String('pregao4');
        
        $table->String('possui_internet_lab');
        
        $table->String('tipo_internet_lab');
        
        $table->String('lab_montado');
        
        $table->String('qt_computadores_lab');
        
        $table->String('qt_monitores_lab');

        $table->String('qt_projetores');

        $table->String('qt_tablets');
     
        $table->String('status_lab');
        
        $table->String('ar_condicionado_lab');
        
        $table->String('impressora_lab');
        
        $table->String('qt_notebook_lab');
        
        $table->String('roteador_lab');
        
        $table->String('switch_lab');
        
        $table->String('qt_cadeiras_lab');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
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
        Schema::drop('escolas');
    }
}
