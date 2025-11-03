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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('ئازادی');
            $table->string('mother')->nullable();

            $table->string('neighborhood')->nullable();
            $table->string('house')->nullable();
            $table->string('street')->nullable();

            $table->string('floor')->nullable();
            $table->string('origin')->nullable();

            $table->date('date')->default(now());
            $table->string('computer_code')->nullable();

            $table->bigInteger('identification_number')->nullable();
            $table->date('birthday')->nullable();

            $table->string('office')->nullable();
            $table->string('record')->nullable();
            
            $table->integer('page')->default(0)->nullable();
            $table->integer('food_form_number')->nullable();

            $table->text('notice')->nullable();
            $table->timestamps();

    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');

    }
};
