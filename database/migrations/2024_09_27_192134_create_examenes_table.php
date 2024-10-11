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
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->unsigned();
            $table->string('qualification', 50)->nullable();
            $table->foreignId('student_id')->unsigned();
            $table->integer('tuition')->unsigned()->nullable();
            $table->integer('note')->unsigned()->nullable();
            $table->foreignId('period_id')->unsigned();
            $table->string('partial', 25)->nullable();

            $table->foreign('subject_id')->references('id')->on('asignaturas')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('estudiantes')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('period_id')->references('id')->on('periodos')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};
