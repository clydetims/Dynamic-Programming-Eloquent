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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('The title of the post');
            $table->text('content')->comment('The content of the post');
            $table->string('slug')->comment('URL Identifier of a post.');
            $table->timestamp('publication_date')->nullable();
            $table->timestamp('last_modified_date')->nullable();
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->text('featured_image_url')->comment('URL of the featured image for the post');
            $table->integer('views_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
