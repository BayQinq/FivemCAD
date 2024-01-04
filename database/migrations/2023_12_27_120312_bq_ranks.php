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
        Schema::create('bq_ranks', function(Blueprint $table){ 
            $table->id();
            $table->integer('date_added');
            $table->integer('date_updated')->nullable();
            $table->string('user_id');
            $table->integer('is_active')->default(1);
            $table->bigInteger('is_delete')->default(0);
            $table->string('name');
            $table->integer('sort')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
