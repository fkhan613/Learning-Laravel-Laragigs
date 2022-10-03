<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade') ->nullable();
            $table -> string('title') ->nullable();
            $table -> string('tags')->nullable();
            $table -> string('company_name')->nullable();
            $table -> string('location')->nullable();
            $table -> string('email')->nullable();
            $table -> string('website')->nullable();
            $table -> longText('description')->nullable();
            $table -> string('logo') ->nullable();
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
        Schema::dropIfExists('listings');
    }
};
