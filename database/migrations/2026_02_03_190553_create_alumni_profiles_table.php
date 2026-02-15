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
        Schema::create('alumni_profiles', function (Blueprint $table) {
             $table->id();
             $table->foreignId('user_id')->constrained()->onDelete('cascade');
             $table->foreignId('department_id')->constrained()->onDelete('cascade');
             $table->string('image')->nullable();
             $table->string('student_roll')->nullable();
             $table->string('registration_no')->nullable();
             $table->string('batch');
             $table->year('batch_year');
             $table->string('phone');
             $table->string('email')->unique()->nullable();
             $table->string('blood_group')->nullable();
             $table->date('date_of_birth');  
             $table->text('address');
             $table->string('gender');
             $table->string('current_position')->nullable();
             $table->string('company')->nullable();
             $table->string('social_link')->nullable();
             $table->text('profile_summary')->nullable();
             $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
             $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_profiles');
    }
};
