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
            $table->decimal("total");
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
            $table->enum("status",["ordred","delivred","canceled"])->default("ordred");
            $table->boolean("is_shipping_difrent")->default(false);
            $table->date('delivered_date')->nullable();
            $table->date('canceled_date')->nullable();
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
