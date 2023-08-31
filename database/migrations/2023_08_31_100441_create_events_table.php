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
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->unsignedBigInteger("location_id");
            $table->foreign("location_id")->references("location_id")->on("locations");
            // id column has unsignedbiginteger so here must be same.
            $table->string("name");
            $table->text("info");
            $table->date("date");
            $table->time("time");
            $table->integer("is_complete")->default("0");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
