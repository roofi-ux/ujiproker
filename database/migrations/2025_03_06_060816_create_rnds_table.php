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
        Schema::create('rnds', function (Blueprint $table) {
            $table->id();
            $table->longText('proker');
            $table->longText('renker');
            $table->longText('target');
            $table->string('janw1')->nullable();
            $table->string('janw2')->nullable();
            $table->string('janw3')->nullable();
            $table->string('janw4')->nullable();
            $table->string('hasil')->nullable();
            $table->string('aproval')->nullable();
            $table->string('ket')->nullable();
            $table->string('persen')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rnds');
    }
};
