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
        Schema::disableForeignKeyConstraints();
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('election_id');
            $table->unsignedBigInteger('tour_nb');
            $table->unsignedBigInteger('pourcentage');
            $table->unsignedBigInteger('parti_id');

            // Définition de la clé étrangère vers la table mouvements
            $table->foreign('election_id')
                ->references('id')
                ->on('elections')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('parti_id')
                ->references('id')
                ->on('partis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
