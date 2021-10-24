<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('turmas')){
            Schema::create('turmas', function (Blueprint $table) {
                $table->id();
                $table->integer('year');
                $table->string('level');
                $table->string('serie');
                $table->char('turn');
                $table->timestamps();
                $table->foreign('school_id')->references('id')
                ->on('escolas')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('turmas');
    }
}
