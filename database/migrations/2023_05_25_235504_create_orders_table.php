<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal("tax");
            $table->decimal("subtotal");
            $table->decimal("total");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("mobile");
            $table->string("email");
            $table->string("line");
            $table->string("line1")->nullable();
            $table->string("city");
            $table->string("province");
            $table->string("country");
            $table->string("zipcode");
            $table->enum("status",["ordred","delivred","canceled"])->default("ordred");
            $table->boolean("is_shipping_difrent")->default(false);
            $table->date('delivered_date')->nullable();
            $table->date('canceled_date')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
