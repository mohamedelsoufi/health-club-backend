<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('branch_point_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('branch_point_id');
            $table->string('locale')->index();
            $table->longText('description')->nullable();

            $table->unique(['branch_point_id', 'locale']);
            $table->foreign('branch_point_id')->references('id')->on('branch_points')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch_point_translations');
    }
};
