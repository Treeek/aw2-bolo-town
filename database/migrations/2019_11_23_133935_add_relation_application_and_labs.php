<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationApplicationAndLabs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications_instalations', function (Blueprint $table) {
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('application_id');
            $table->date('licence_expiration_date');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('lab_id')->references('id')->on('labs');
            $table->foreign('application_id')->references('id')->on('applications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications_instalations');
    }
}
