<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sponsors', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('logo');

            $table->string('whatsapp');

            $table->string('group_link')->nullable();

            $table->text('description')->nullable();

            $table->enum(
                'package',
                [
                    'diamond',
                    'platinum',
                    'gold'
                ]
            );

            $table->boolean('verified')
                ->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
