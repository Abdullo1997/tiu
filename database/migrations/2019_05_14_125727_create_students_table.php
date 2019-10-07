<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('facuty_id')->unsigned();
            $table->string('otm');
            $table->string('name_of_faculty');
            $table->string('diraction_name');
            $table->string('group_number');
            $table->string('level');
            $table->string('shir');
            $table->string('name');
            $table->string('surname');
            $table->string('father_name');
            $table->string('be_born_year');
            $table->string('place_of_residence');
            $table->string('residence_address');
            $table->string('student_phone_number');
            $table->string('father_f_i_o');
            $table->string('mather_f_i_o');
            $table->string('parent_home_address');
            $table->string('education_type');
            $table->string('image');
            $table->string('nation');
            $table->integer('gender')->nullable();
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
