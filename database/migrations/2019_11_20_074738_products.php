<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }
    public function insertar(){
    products::Insert(['id'=>$id]);
    products::Insert(['name'=>$name]);
    products::Insert(['description'=>$description]);
    products::Insert(['stock'=>$stock]);
    products::Insert(['price'=>$price]);
    products::Insert(['created_at'=>$created]);
    products::Insert(['updated_at'=>$updated]);
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
