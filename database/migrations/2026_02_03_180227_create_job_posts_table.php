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
        Schema::create('job_posts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');        
        $table->string('job_title');
        $table->string('company_name');
        $table->string('company_logo')->nullable();
        $table->string('image')->nullable(); 
        $table->string('job_location'); // Remote/Dhaka/Chittagong
        $table->string('employment_type'); // Full-time/Part-time/Contractual
        $table->string('experience_level'); // Entry/Mid/Senior     
        $table->text('job_description');
        $table->text('requirements')->nullable(); // আলাদা রিকোয়ারমেন্টস ফিল্ড 
        $table->string('salary_range')->nullable(); // অথবা min/max salary
        $table->date('application_deadline');
        $table->string('phone')->nullable();
        $table->string('email')->nullable();
        $table->string('application_link')->nullable();
        $table->enum('approval_status',['approved', 'pending', 'rejected'])->default('pending');    
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
