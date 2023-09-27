<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
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
        Schema::create('events', function (Blueprint $table) {
            $db = DB::connection('mysql2')->getDatabaseName();
            $table->id();
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('status')->status('pendiente');
            $table->decimal('payment', 8, 2)->default(0.00);
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('CASCADE')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on(new Expression($db . '.users'))->onDelete('CASCADE')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
