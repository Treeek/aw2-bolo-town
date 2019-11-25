<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveRedundantFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('labs');
            $table->dropColumn('instalation_date');
            $table->dropColumn('acceptance_date');
            $table->dropColumn('licence_expiration_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('labs', 240);
            $table->date('instalation_date')->nullable();
            $table->date('licence_expiration_date')->nullable();
            $table->date('acceptance_date')->nullable();
        });
    }
}
