<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intakes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intake_from')->unique();
            $table->string('intake_to')->unique();
            $table->date('intake_date')->nullable();
            $table->longText('academic_programs')->nullable();
            $table->longText('attendances')->nullable();
            $table->string('years')->nullable();
            $table->longText('courses')->nullable();
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
        Schema::dropIfExists('intakes');
    }
};
