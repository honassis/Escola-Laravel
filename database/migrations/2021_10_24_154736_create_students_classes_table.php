<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsClassesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students_classes')){
            

        Schema::create('students_classes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id');
            $table->bigInteger('classes_id');
            $table->timestamps();
        });
        //Vincula a turma a uma escola
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('schools')
            ->on('students')->onUpdate('cascade')
            ->onDelete('cascade');;
        });
        //Vincula um aluno a uma turma
        Schema::table('students_classes', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('students_classes');
    }
}
