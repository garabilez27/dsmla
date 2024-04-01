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
        Schema::create('tbl_menus', function (Blueprint $table) {
            $table->id('mn_id');
            $table->string('mn_name');
            $table->string('mn_url');
            $table->string('mn_icon');
            $table->string('mn_code', 12)->unique();
            $table->unsignedInteger('mn_sequence');
            $table->unsignedTinyInteger('mn_root')->default(1);
            $table->unsignedTinyInteger('mn_active')->default(1);
            $table->unsignedTinyInteger('mn_deleted')->default(0);
            $table->timestamp('mn_created_at')->useCurrent();
            $table->timestamp('mn_updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_menus');
    }
};
