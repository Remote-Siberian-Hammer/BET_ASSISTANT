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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->integer("sport_id");
            $table->integer("rapid_sport_id");
            $table->string("slug");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("name_de");
            $table->string("name_fr");
            $table->string("name_sport");
            $table->string("photo");
            $table->date("birth_date");
            $table->string("nationality_code");
            $table->integer("perfomance_total");
            $table->integer("perfomance_wins");
            $table->integer("perfomance_draws");
            $table->integer("perfomance_losses");
            $table->integer("perfomance_goals_scores");
            $table->integer("perfomance_goals_conceded");
            $table->string("preferred_formation");
            $table->timestamps();
            $table->foreign("sport_id")
                ->references("id")
                ->on("sports")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
