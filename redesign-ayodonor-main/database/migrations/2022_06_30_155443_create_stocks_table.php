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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->enum('blood_type', ['A', 'B', 'AB', 'O']);
            $table->foreignId('component_id')->constrained();
            $table->foreignId('province_id')->constrained();
            $table->integer('value')->default(0);
            $table->timestamps();

            $table->unique(['blood_type', 'component_id', 'province_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
