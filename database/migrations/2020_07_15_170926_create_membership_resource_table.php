<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_resource', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id');
            $table->foreignId('resource_id');
            $table->timestamps();

            $table->foreign('membership_id')->references('id')->on('memberships');
            $table->foreign('resource_id')->references('id')->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_resource');
    }
}
