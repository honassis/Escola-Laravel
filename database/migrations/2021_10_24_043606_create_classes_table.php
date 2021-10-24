<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('classes')){
            Schema::create('classes', function (Blueprint $table) {
                $table->id();
                $table->integer('year');
                $table->string('level');
                $table->string('serie');
                $table->char('turn');
                $table->timestamps();
               $table->bigInteger('school_id');

               
            });
            
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
