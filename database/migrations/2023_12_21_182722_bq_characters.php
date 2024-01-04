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
        Schema::create('bq_characters', function(Blueprint $table){ 
            $table->id();
            $table->integer('is_active')->default(0);
            $table->string('user_id');
            $table->integer('date_added')->nullable();
            $table->integer('date_updated')->nullable();
            $table->integer('date_finished')->nullable();
            $table->string('ch_first_name')->nullable();
            $table->string('ch_last_name')->nullable();
            $table->string('ch_birth_date')->nullable();
            $table->integer('ch_rank')->nullable();
            $table->integer('ch_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bq_characters');
    }
};
