<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('road_category_id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('organization_id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('starts_from');
            $table->string('end_at');
            $table->string('road_plan')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('roads');
    }
}
