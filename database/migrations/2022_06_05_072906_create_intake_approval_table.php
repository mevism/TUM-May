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
        Schema::create('intake_approval', function (Blueprint $table) {
            $table->bigIncrements('intake_id');
            $table->string('intake_name')->nullable();
            $table->date('intake_date');
            $table->text('academic_programs')->nullable();
            $table->text('attendances')->nullable();
            $table->text('years')->nullable();
            $table->text('courses')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('intake_approval');
    }
};
