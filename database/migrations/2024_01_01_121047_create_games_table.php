<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('played_years');
            $table->text('comments');
            $table->unsignedBigInteger('igdb_id');
            $table->timestamps();

            $table->index('title');
            $table->index('igdb_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
