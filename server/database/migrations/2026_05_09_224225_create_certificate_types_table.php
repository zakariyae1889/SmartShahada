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
        Schema::create('certificate_types', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->text("description");
            $table->text("attachment");
            $table->string("price");
            $table->date("expiry_date");
            $table->uuid("slug")->unique()->index();
            $table->foreignId("category_id")->constrained("categories")->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_types');
    }
};
