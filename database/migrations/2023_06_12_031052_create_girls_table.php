<?php

use App\Enums\GirlsTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->id();
            $table->xEnum('type', GirlsTypeEnum::class, '类型');
            $table->string('name')->comment('名字');
            $table->string('phone')->comment('手机号');

            $table->timestamps();
            $table->comment('女孩');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('girls');
    }
};
