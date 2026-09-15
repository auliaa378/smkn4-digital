<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitors', function (Blueprint $table) {

            if (!Schema::hasColumn('visitors', 'session_id')) {
                $table->string('session_id')->nullable();
            }

            if (!Schema::hasColumn('visitors', 'ip_address')) {
                $table->ipAddress('ip_address')->nullable();
            }

            if (!Schema::hasColumn('visitors', 'user_agent')) {
                $table->text('user_agent')->nullable();
            }

            if (!Schema::hasColumn('visitors', 'url')) {
                $table->string('url')->nullable();
            }

        });
    }

    public function down(): void
    {
        Schema::table('visitors', function (Blueprint $table) {

            if (Schema::hasColumn('visitors', 'session_id')) {
                $table->dropColumn('session_id');
            }

            if (Schema::hasColumn('visitors', 'ip_address')) {
                $table->dropColumn('ip_address');
            }

            if (Schema::hasColumn('visitors', 'user_agent')) {
                $table->dropColumn('user_agent');
            }

            if (Schema::hasColumn('visitors', 'url')) {
                $table->dropColumn('url');
            }

        });
    }
};