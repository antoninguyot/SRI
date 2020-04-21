<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('int_weeks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('type');
            $table->float('fee');
            $table->integer('students');
            $table->string('begins_at');
            $table->string('ends_at');
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
        Schema::dropIfExists('int_weeks');
    }
}
