<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('github')->unique();
            $table->timestamp('lastpull')->nullable();
            $table->string('backup_filename')->nullable();
            $table->longText('docker')->nullable();
            $table->longText('notes')->nullable();
            $table->string('path')->nullable();
            $table->longText('autodocs')->nullable();
            $table->timestamp('install_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
