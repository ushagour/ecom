<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();

            $table->string("firstName");
            $table->string("lastName");
            $table->string("mobile");
            $table->string("email");
            $table->string("line");
            $table->string("line1")->nullable();
            $table->string("city");
            $table->string("province");
            $table->string("country");
            $table->string("zipcode");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
            $table->softDeletes();
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
        Schema::dropIfExists('shippings');
    }
}
