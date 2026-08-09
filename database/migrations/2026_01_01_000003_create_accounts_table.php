<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {

            $table->id();

            $table->foreignId('sponsor_id');

            $table->foreignId('game_id');

            $table->string('title');

            $table->string('thumbnail');

            $table->decimal(
                'price',
                15,
                0
            );

            $table->integer('level')
                ->nullable();

            $table->integer('prime_level')
                ->nullable();

            $table->text('description')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
