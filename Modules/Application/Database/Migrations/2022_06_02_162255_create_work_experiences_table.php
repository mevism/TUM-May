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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('organization_name')->nullable();
            $table->string('organization_post')->nullable();
            $table->date('start_date')->nullable();
            $table->date('exit_date')->nullable();
            $table->string('organization_name1')->nullable();
            $table->string('organization_post1')->nullable();
            $table->date('start_date1')->nullable();
            $table->date('exit_date1')->nullable();
            $table->string('organization_name2')->nullable();
            $table->string('organization_post2')->nullable();
            $table->date('start_date2')->nullable();
            $table->date('exit_date2')->nullable();
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
        Schema::dropIfExists('work_experiences');
    }
};
