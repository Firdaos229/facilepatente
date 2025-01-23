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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->text('Conditions_generale')->nullable();
            $table->text('politique_de_confidentialite')->nullable();
            $table->text('lien_linkedin')->nullable();
            $table->text('lien_facebook')->nullable();
            $table->text('lien_whatsaap')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
