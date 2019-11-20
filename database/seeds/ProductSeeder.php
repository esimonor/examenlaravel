<?php

use Illuminate\Database\Seeder;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
    public function insertar_productos(){
        products::Insert(['id'=>$id_products]);
        products::Insert(['name'=>$name_products]);
        products::Insert(['description'=>$description_products]);
        products::Insert(['stock'=>$stock]);
        products::Insert(['price'=>$price]);
        products::Insert(['created_at'=>$created_products]);
        products::Insert(['updated_at'=>$updated_products]);
        }
}
