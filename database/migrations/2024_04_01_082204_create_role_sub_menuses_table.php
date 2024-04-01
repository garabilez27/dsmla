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
        Schema::create('tbl_role_sub_menus', function (Blueprint $table) {
            $table->id('rsm_id');
            $table->unsignedBigInteger('rlmn_id');
            $table->unsignedBigInteger('sbmn_id');
            $table->foreign('sbmn_id')->references('sbmn_id')->on('tbl_sub_menus')->onDelete('cascade');
            $table->foreign('rlmn_id')->references('rlmn_id')->on('tbl_role_menus')->onDelete('cascade');
            $table->unsignedTinyInteger('rsm_active')->default(1);
            $table->timestamp('rsm_created_at')->useCurrent();
            $table->timestamp('rsm_updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_role_sub_menus');
    }
};
