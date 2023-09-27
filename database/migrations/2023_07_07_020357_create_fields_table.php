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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $db = DB::connection('mysql2')->getDatabaseName();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->string('color',50)->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('activo');
            $table->decimal('hour_cost', 8, 2)->default(0.00);
            $table->longText('description')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on(new Expression($db . '.users'))->onDelete('CASCADE')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
