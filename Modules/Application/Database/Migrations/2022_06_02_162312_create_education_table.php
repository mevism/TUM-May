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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('secondary_school');
            $table->string('secondary_qualification');
            $table->string('secondary_start');
            $table->string('secondary_end');
            $table->string('secondary_certificate');
            $table->string('tertiary_school')->nullable();
            $table->string('tertiary_qualification')->nullable();
            $table->string('tertiary_start')->nullable();
            $table->string('tertiary_end')->nullable();
            $table->string('tertiary_certificate')->nullable();
            $table->string('tertiary1_school')->nullable();
            $table->string('tertiary1_qualification')->nullable();
            $table->string('tertiary1_start')->nullable();
            $table->string('tertiary1_end')->nullable();
            $table->string('tertiary1_certificate')->nullable();
            $table->string('tertiary2_school')->nullable();
            $table->string('tertiary2_qualification')->nullable();
            $table->string('tertiary2_start')->nullable();
            $table->string('tertiary2_end')->nullable();
            $table->string('tertiary2_certificate')->nullable();
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
        Schema::dropIfExists('education');
    }
};
