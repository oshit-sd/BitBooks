<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('u_id')->nullable();
            $table->string('u_name')->nullable();
            $table->string('user_image')->nullable();
            $table->string('user_coverphoto')->nullable();
            $table->string('email')->nullable();
            $table->string('language')->nullable();
            $table->string('dob_day')->nullable();
            $table->string('dob_month')->nullable();
            $table->string('dob_year')->nullable();
            $table->string('gender')->nullable();
            $table->string('my_city')->nullable();
            $table->string('my_country')->nullable();
            $table->string('about_me')->nullable();
            $table->string('school')->nullable();
            $table->string('from_school')->nullable();
            $table->string('to_school')->nullable();
            $table->string('description_school')->nullable();
            $table->string('university')->nullable();
            $table->string('from_uni')->nullable();
            $table->string('to_uni')->nullable();
            $table->string('description_uni')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->string('from_work')->nullable();
            $table->string('to_work')->nullable();
            $table->string('city_work')->nullable();
            $table->string('description_work')->nullable();
            $table->string('interest')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
