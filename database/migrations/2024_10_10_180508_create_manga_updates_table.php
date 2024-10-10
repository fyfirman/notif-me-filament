<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manga_updates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->text('raw_url');
            $table->bigInteger('last_chapter')->default(1);
            $table->timestamp('last_checked_at')->nullable();
            $table->timestampTz('updated_at');
            $table->timestampTz('created_at');
            $table->text('negative_identifier')->nullable();
            $table->bigInteger('chat_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manga_updates');
    }
};
