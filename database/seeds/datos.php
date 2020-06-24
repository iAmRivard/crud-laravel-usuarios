<?php

use Illuminate\Database\Seeder;

class datos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuario')->insert([
            'id_tipousuario' => 1,
            'nombre_tipo' => 'Super Usuario',
            'created_at' => null,
            'updated_at' => null
        ]);

        DB::table('tipousuario')->insert([
            'id_tipousuario' => 2,
            'nombre_tipo' => 'Administrador',
            'created_at' => null,
            'updated_at' => null
        ]);
        DB::table('tipousuario')->insert([
            'id_tipousuario' => 3,
            'nombre_tipo' => 'Operador',
            'created_at' => null,
            'updated_at' => null
        ]);


    }
}
