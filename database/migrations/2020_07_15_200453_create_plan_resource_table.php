<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_resource', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id');
            $table->foreignId('resource_id');
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('plans')
                ->onDelete('cascade');
            

            $table->foreign('resource_id')->references('id')->on('resources')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_resource');
    }
}
