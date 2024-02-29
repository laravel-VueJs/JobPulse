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
            $table->string('photo',200);
            $table->string('father_name', 50)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->date('date_of_birth');
            $table->enum('gender',['male', 'female', 'other'])->default(null);
            $table->string('blood_group',10)->nullable();
            $table->string('gov_id',20);
            $table->string('emergency_phone',20)->nullable();
            $table->text('address');
            $table->text('bio')->nullable();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

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
