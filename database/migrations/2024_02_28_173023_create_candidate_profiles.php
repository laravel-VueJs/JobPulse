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
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('date_of_birth');
            $table->enum('gender',['male', 'female', 'other'])->default(null);
            $table->string('blood_group')->nullable();
            $table->integer('gov_id');
            $table->string('emergency_phone')->nullable();
            $table->text('address');
            $table->text('bio')->nullable();

            // Foreign Key
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
