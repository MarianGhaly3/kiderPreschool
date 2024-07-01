<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->string('teacherName', 100);
            $table->Integer('price');
            $table->tinyInteger('age');
            $table->string('time');
            $table->tinyInteger('capacity');
            $table->softDeletes();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Courses');
    }
};
