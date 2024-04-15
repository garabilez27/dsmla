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
        Schema::create('tbl_sub_menus', function (Blueprint $table) {
            $table->id('sbmn_id');
            $table->string('sbmn_prefix', 10)->unique();
            $table->string('sbmn_name');
            $table->string('sbmn_url', 191)->unique();
            $table->string('sbmn_icon');
            $table->string('sbmn_class');
            $table->unsignedInteger('sbmn_sequence');
            $table->unsignedTinyInteger('sbmn_branch')->default(1);
            $table->unsignedTinyInteger('sbmn_active')->default(1);
            $table->unsignedTinyInteger('sbmn_deleted')->default(0);
            $table->timestamp('sbmn_created_at')->useCurrent();
            $table->timestamp('sbmn_updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sub_menus');
    }
};
