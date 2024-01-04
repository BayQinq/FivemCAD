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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('global_name')->nullable();
            $table->string('username')->nullable();
            $table->string('discriminator')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->boolean('verified')->nullable();
            $table->string('locale')->nullable();
            $table->string('refresh_token')->nullable();
            $table->integer('department_id')->default(0);
            $table->integer('is_active')->default(0);
            $table->integer('is_supervisor')->default(0);
            $table->integer('is_admin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};