<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasColumn('expenditures', 'date')) {
            Schema::table('expenditures', function (Blueprint $table) {
                $table->date('date')->nullable()->after('amount');
            });
        }
    }

    public function down(): void
    {
        Schema::table('expenditures', function (Blueprint $table) {
            $table->dropColumn('date');
        });
    }
};
