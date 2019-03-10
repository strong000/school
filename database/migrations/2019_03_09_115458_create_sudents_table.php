<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSudentsTable extends Migration
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
            $table->string('name');
            $table->unsignedBigInteger('class_id');
            $table->string('gender');
            $table->string('born_place');
            $table->date('born_date');
            $table->string('address');
            $table->string('class');
            $table->integer('is_active');
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
        Schema::dropIfExists('students');
    }
}
