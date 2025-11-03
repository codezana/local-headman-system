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
        Schema::create('family', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable(); // Name of family member
            $table->date('born')->nullable(); // Born

            $table->string('occupation')->nullable(); // Occupation
            $table->string('Workplace')->nullable(); // Workplace

            $table->string('security_code')->nullable(); // Security code
            $table->bigInteger('phone')->nullable(); // J. Mobile

            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('id')->on('invoice')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family');
    }
};
