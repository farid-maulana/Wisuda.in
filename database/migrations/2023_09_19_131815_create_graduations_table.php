<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('batch');
            $table->integer('session');
            $table->dateTime('schedule');
            $table->enum('type', ['online', 'offline'])->default('offline');
            $table->integer('quota');
            $table->foreignId('graduation_registration_schedule_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graduations');
    }
};
