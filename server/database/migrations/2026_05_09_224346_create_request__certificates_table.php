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
        Schema::create('request__certificates', function (Blueprint $table) {
            $table->id();
            $table->uuid('tracking_number')->unique()->default(DB::raw('(UUID())'));
            $table->enum("status",["pending","processing","approved","rejected","archived"]);
            $table->text("rejection_reason")->nullable();
            $table->foreignId("adminstration_id")->constrained("administrations")->onDelete("cascade");
            $table->foreignId("citizen_id")->constrained("citizens")->onDelete("cascade");
            $table->foreignId("certificate_type_id")->constrained("certificate_types")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request__certificates');
    }
};
