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
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->integer("sport_id");
            $table->integer("section_id");
            $table->integer("rapid_sport_id");
            $table->integer("rapid_section_id");
            $table->string("slug");
            $table->string("logo");
            $table->string("host_country");
            $table->string("host_fllag");
            $table->integer("most_count");
            $table->string("name");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("name_de");
            $table->string("name_fr");
            $table->timestamp("start_date");
            $table->timestamp("end_date");
            $table->timestamps();
            $table->foreign("sport_id")
                ->references("id")
                ->on("sports")
                ->onDelete("cascade");
            $table->foreign("section_id")
                ->references("id")
                ->on("sections")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues');
    }
};
