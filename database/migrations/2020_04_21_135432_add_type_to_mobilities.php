<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToMobilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->string('type')->default('Autre');
        });

        Schema::table('semesters', function (Blueprint $table) {
            $table->string('type')->default('Autre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->dropColumn('type');
        });

        Schema::table('semesters', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
