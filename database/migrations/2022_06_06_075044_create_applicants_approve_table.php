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
        Schema::create('applicants_approve', function (Blueprint $table) {
            $table->id();
            $table->string('password')->nullable();
            $table->integer('index_number')->nullable();
            $table->integer('id_number')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('alt_mobile')->nullable();
            $table->integer('user_status')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('disability')->nullable();
            $table->string('title')->nullable();
            $table->string('nationality')->nullable();
            $table->string('county')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->date('DOB');
            $table->text('academics');
            $table->text('work');
            $table->string('kcpe');
            $table->string('kcse');
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
        Schema::dropIfExists('applicants_approve');
    }
};
