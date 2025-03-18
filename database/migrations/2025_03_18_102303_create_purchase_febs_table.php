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
        Schema::create('purchase_febs', function (Blueprint $table) {
            $table->id();
            $table->longText('proker');
            $table->longText('renker');
            $table->longText('target');
            $table->string('febw1')->nullable();
            $table->string('febw2')->nullable();
            $table->string('febw3')->nullable();
            $table->string('febw4')->nullable();
            $table->longText('hasil')->nullable();
            $table->string('persen')->nullable();
            $table->string('achieve')->nullable();
            $table->string('ket')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_febs');
    }
};
