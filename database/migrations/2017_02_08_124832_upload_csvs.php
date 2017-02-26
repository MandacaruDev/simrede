<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Upload_csvs.
 *
 * @author  The scaffold-interface created at 2017-02-08 12:48:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class UploadCsvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('upload_csvs',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('ano');
        
        $table->String('simulado');
        
        $table->String('nivel');
        
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
        Schema::drop('upload_csvs');
    }
}
