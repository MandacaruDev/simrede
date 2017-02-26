<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Modals.
 *
 * @author  The scaffold-interface created at 2016-12-26 09:23:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Modals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('modals',function (Blueprint $table){

        $table->increments('id');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('anulada_id')->unsigned()->nullable();
        $table->foreign('anulada_id')->references('id')->on('anulada')->onDelete('cascade');
        
        $table->integer('ocupacao_id')->unsigned()->nullable();
        $table->foreign('ocupacao_id')->references('id')->on('ocupacaos')->onDelete('cascade');
        
        $table->integer('pessoa_id')->unsigned()->nullable();
        $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
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
        Schema::drop('modals');
    }
}
