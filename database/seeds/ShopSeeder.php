<?php

use Illuminate\Database\Seeder;

class tiendas extends Seeder
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
    public function insertar_tiendas(){
        shops::Insert(['id'=>$id_shops]);
        shops::Insert(['name'=>$name_shops]);
        shops::Insert(['description'=>$description_shops]);
        shops::Insert(['password'=>$password]);
        shops::Insert(['email'=>$email]);
        shops::Insert(['likes'=>$likes]);
        shops::Insert(['created_at'=>$created_shops]);
        shops::Insert(['updated_at'=>$updated_shops]);
    }
}
