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
       Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');        
        $table->string('title');
        $table->string('slug')->unique(); // SEO ফ্রেন্ডলি URL এর জন্য
        $table->string('event_category');
        $table->text('description')->nullable();       
        $table->date('event_date');
        $table->time('event_time')->nullable(); 
        $table->string('location')->nullable();        
        $table->string('image')->nullable(); 
        $table->decimal('price', 8, 2)->default(0); // ফ্রি হলে ০, নতুবা দাম    
        $table->enum('status',['approved','pending','rejected'])->default('pending');           
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
