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
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id')->unique;
            $table->string('transactionId');
            $table->string('Acheteur_nom');
            $table->string('Acheteur_adresse');
            $table->string('Acheteur_numero');
            $table->string('Acheteur_email');
            $table->string('Montant');
            $table->boolean('statut')->default(false);

            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
