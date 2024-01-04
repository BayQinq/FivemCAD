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
        Schema::create('bq_invites', function(Blueprint $table){ 
            $table->id();
            $table->integer('date_added');
            $table->string('created_by');
            $table->string('user_id');
            $table->bigInteger('station_id');
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
