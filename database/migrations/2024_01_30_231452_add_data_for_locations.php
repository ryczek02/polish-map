<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    private const DIRECTORY = './database/data/polish-data/';

    /**
     * Run the migrations.
     */
    public function up(): void
    {

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
