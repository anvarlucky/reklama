<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billboards', function (Blueprint $table) {
            $table->id();
            $table->string('passportNumber')->unique();
            $table->unsignedBigInteger('reklam_agency_id')->nullable(false);
            $table->foreign('reklam_agency_id')
                ->references('id')
                ->on('reklam_agencies')
                ->onDelete('cascade');
            $table->integer('zone');
            $table->unsignedBigInteger('district_id')->nullable(false);
            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onDelete('cascade');
            $table->text('address');
            $table->text('specialCondition');
            $table->unsignedBigInteger('type_construction_id')->nullable(false);
            $table->foreign('type_construction_id')
                ->references('id')
                ->on('type_constructions')
                ->onDelete('cascade');
            $table->integer('status');
            $table->string('location');
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

        Schema::table('billboards', function (Blueprint $table) {
            $table->dropForeign('reklam_agency_id');
            $table->dropForeign('district_id');
            $table->dropForeign('type_construction_id');
        });
        Schema::dropIfExists('billboards');
    }
}
