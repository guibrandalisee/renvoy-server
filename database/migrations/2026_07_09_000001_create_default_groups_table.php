<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('default_groups', function (Blueprint $table): void {
            $table->id();
            $table->string('key')->unique();
            $table->string('name_en');
            $table->string('name_pt');
            $table->string('name_es');
            $table->string('icon');
            $table->string('color', 7);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('default_groups');
    }
};
