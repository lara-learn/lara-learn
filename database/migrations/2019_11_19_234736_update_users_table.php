<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::table(
            'users',
            function (Blueprint $table) {
                $table->string('type')->default('student');
            }
        );
    }

    public function down(): void
    {
        Schema::table(
            'users',
            function (Blueprint $table) {
                $table->removeColumn('type');
            }
        );
    }
}
