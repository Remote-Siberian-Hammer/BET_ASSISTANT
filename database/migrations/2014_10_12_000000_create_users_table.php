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
            $table->char('FirstName', 60)
                ->nullable(false);
            $table->string('LastName', 60)
                ->nullable(false);
            $table->string('Email')
                ->nullable(true)
                ->unique()
                ->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Phone')
                ->nullable(true)
                ->unique()
                ->default(null);
            $table->string('Password');
            $table->timestamps();
            $table->rememberToken();
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
