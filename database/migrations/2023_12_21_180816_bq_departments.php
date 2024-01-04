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
        Schema::create('bq_departments', function(Blueprint $table){
            $table->id();
            $table->integer('is_active')->default(0);
            $table->string('created_by');
            $table->integer('date_added')->nullable();
            $table->integer('date_updated')->nullable();
            $table->integer('date_finished')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('notes')->nullable();
            $table->integer('bonus_payment')->default(0);
            $table->integer('division_rank')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bq_departments');
    }
};
