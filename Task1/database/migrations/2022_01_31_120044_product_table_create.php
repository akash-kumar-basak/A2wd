<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function(Blueprint $table)
        {
            $table -> bigIncrements('id');
            $table -> string('Category', 20);
            $table -> string('brand', 20);
            $table -> string('product_name', 50);
            $table -> timestamps();
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
