<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('university');
            $table->string('email');
            $table->string('publication');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('achievement_id');
            $table->string('research_interast');
            $table->string('designation');
            $table->string('degrees');
            $table->timestamps();

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade'); 

            $table->foreign('achievement_id')
                  ->references('id')
                  ->on('achievements')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
