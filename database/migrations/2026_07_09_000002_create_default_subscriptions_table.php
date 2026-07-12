<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('default_subscriptions', function (Blueprint $table): void {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('domain')->nullable();
            $table->string('icon_slug')->nullable();
            $table->string('color', 7)->nullable();
            $table->string('manage_url')->nullable();
            $table->foreignId('default_group_id')->nullable()->constrained('default_groups')->nullOnDelete();
            $table->boolean('is_active')->default(true);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('default_subscriptions');
    }
};
