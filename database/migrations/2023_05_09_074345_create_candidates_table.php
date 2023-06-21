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
        Schema::disableForeignKeyConstraints();

        Schema::create('candidates', function (Blueprint $table) {

            $table->foreignUlid('User_id')->references('users')->on('id')->onDelete('set null')->primary();

            $table->string('Position');
            $table->foreign('Position')->references('Position')->on('positions');

            $table->integer('Votes')->default(0);
            $table->longText('Slogan');
            $table->string('path_to_image');
            $table->string('path_to_application_letter');
            $table->boolean('Application_status')->default(false);
            //$table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
