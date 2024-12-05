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
        Schema::create('partis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mouvement_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();

            // Définition de la clé étrangère vers la table mouvements
            $table->foreign('mouvement_id')
                ->references('id')
                ->on('mouvements')
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
        Schema::dropIfExists('partis');
    }
};
