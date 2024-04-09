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
        Schema::create('contact_message', function (Blueprint $table) {
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('message_id')->constrained();
            $table->string('confirmation_code');
            $table->date('confirmation_date')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_message');
    }
};
