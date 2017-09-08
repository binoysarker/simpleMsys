<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name',55);
            $table->string('student_fatherName',55);
            $table->string('student_motherName',55);
            $table->integer('student_mobileNumber');
            $table->string('student_email',55);
            $table->string('student_subject',55);
            $table->integer('year');
            $table->string('profile',55);
            $table->string('student_address',191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profiles');
    }
}
