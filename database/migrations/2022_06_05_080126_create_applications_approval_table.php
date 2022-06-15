<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications_approval', function (Blueprint $table) {
            $table->bigIncrements('applications_id');
            $table->double('amount',15,2);
            $table->string('receipt')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('telephone');
            $table->text('status');
            $table->integer('final_status');
            $table->integer('intake_id');
            $table->string('intake_name');
            $table->date('intake_date');
            $table->integer('attendance');
            $table->integer('year');
            $table->integer('academic_program');
            $table->integer('course');
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
        Schema::dropIfExists('applications_approval');
    }
};
