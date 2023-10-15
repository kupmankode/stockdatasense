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
        Schema::create('Company', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('symbol', 5);
            $table->smallInteger('category_id');
            $table->bigInteger('market_value');
            $table->bigInteger('volume');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
