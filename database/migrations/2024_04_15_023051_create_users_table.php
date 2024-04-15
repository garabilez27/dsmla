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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id('usr_id');
            $table->unsignedBigInteger('rl_id');
            $table->foreign('rl_id')->references('rl_id')->on('tbl_roles')->onDelete('cascade');
            $table->string('usr_fname');
            $table->string('usr_mname')->nullable();
            $table->string('usr_lname');
            $table->string('usr_suff')->nullable();
            $table->string('usr_email', 191)->unique();
            $table->string('usr_password');
            $table->unsignedTinyInteger('usr_active')->default(1);
            $table->unsignedTinyInteger('usr_deleted')->default(0);
            $table->timestamp('usr_created_at')->useCurrent();
            $table->timestamp('usr_updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
    }
};
