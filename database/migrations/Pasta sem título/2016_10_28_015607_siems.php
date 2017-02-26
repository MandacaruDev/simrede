<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Siems.
 *
 * @author  The scaffold-interface created at 2016-10-28 01:56:07am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Siems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('siems',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('usuario');
        
        $table->String('siem');
        
        $table->String('nome');
        
        $table->String('tipo_escola');
        
        $table->String('cod_ext');
        
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
        Schema::drop('siems');
    }
}
