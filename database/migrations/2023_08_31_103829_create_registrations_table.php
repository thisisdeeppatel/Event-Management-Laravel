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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id("registration_id");

            $table->unsignedBigInteger("event_id");
            $table->foreign("event_id")->references("event_id")->on("events");

            $table->string("full_name");
            $table->string("mobile");
            $table->string("email");
            $table->string("college");
            $table->string("designation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
