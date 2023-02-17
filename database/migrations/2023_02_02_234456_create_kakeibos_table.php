<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakeibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakeibos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('month');
            $table->integer('cost_of_living');
            $table->integer('investment');
            $table->integer('saving');
            $table->integer('year_to_date_saving');
            $table->integer('expected_total_savings');
            $table->integer('actual_savings_amount');
            $table->integer('remarks');
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
        Schema::dropIfExists('kakeibos');
    }
}
