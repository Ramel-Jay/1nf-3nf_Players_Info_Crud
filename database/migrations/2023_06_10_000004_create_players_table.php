<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->integer('state_code')->unsigned();
            $table->unsignedBigInteger('game_id');
            $table->string('name');
            $table->string('ign')->unique();
            $table->string('address');

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('state_code')->references('state_code')->on('states')->onDelete('cascade');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('players', function (Blueprint $table){
        //     // $table->foreignId('state_code')->constrained()->on('states')->onDelete('cascade');
        //     // $table->unsignedBigInteger('state_code');
        //     // $table->foreignId('state_code')->reference('state_code')->constrained()->on('states')->onDelete('cascade');
        //     $table->foreignId('state_code')->nullable()->constrained('states')->onDelete('cascade');
        //     // $table->unsignedBigInteger('state_code');
        //     // $table->foreign('state_code')->references('state_code')->on('states');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
