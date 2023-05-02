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
        Schema::create('examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->string('queue_number');
            $table->string('status');
            $table->string('room_number')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('result')->nullable();
            $table->string('action')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });

        $seed = new \Database\Seeders\ExaminationSeeder();
        $seed->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinations');
    }
};
