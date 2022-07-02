<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->string('dob');
            $table->enum('blood_type', ['A', 'B', 'AB', 'O']);
            $table->integer('weight');
            $table->integer('height');
            $table->text('address')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('village')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('phone')->nullable();
            $table->string('disease_history')->nullable();
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
        Schema::dropIfExists('donors');
    }
}
