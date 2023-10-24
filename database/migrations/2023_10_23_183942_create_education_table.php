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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('provider');
            $table->string('provider_link');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->foreignId('profile_id')->constrained('profiles')->cascadeOnDelete();
            $table->string('certificate_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
