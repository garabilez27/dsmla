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
        Schema::create('tbl_role_menus', function (Blueprint $table) {
            $table->id('rlmn_id');
            $table->unsignedBigInteger('rl_id');
            $table->foreign('rl_id')->references('rl_id')->on('tbl_roles')->onDelete('cascade');
            $table->unsignedBigInteger('mn_id');
            $table->foreign('mn_id')->references('mn_id')->on('tbl_menus')->onDelete('cascade');
            $table->unsignedTinyInteger('rlmn_active')->default(1);
            $table->timestamp('rlmn_created_at')->useCurrent();
            $table->timestamp('rlmn_updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_role_menus');
    }
};
