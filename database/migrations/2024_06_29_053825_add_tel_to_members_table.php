<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            // emailカラムの後に必須のtelカラムを追加
            $table->string('tel')->after('email');
        });

        // 既存のレコードに対してデフォルトの電話番号を設定
        DB::table('members')->update(['tel' => 'default_value']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('tel');
        });
    }
};
