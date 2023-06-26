<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bosses_has_girls', function (Blueprint $table) {
            $table->foreignId('bosses_id')->comment('老板');
            $table->foreignId('girls_id')->comment('女孩');

            $table->comment('老板和女孩的关系');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bosses_has_girls');
    }
};
