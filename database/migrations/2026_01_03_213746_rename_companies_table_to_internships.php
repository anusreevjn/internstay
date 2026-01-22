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
        Schema::rename('companies', 'internships');
        Schema::table('internships', function (Blueprint $table) {
            $table->renameColumn('company_name', 'internship_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('internships', function (Blueprint $table) {
            $table->renameColumn('internship_name', 'company_name');
        });
        Schema::rename('internships', 'companies');
    }
};
