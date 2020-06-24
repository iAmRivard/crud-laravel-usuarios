<?php

use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_usuario' => 1,
            'id_tipousuario' => 1,
            'nombre' => 'super',
            'apellido' => 'super',
            'clave' => '$2y$10$SBi96f/dfEhKQJyZibjSRuTA7uT8v2yt2AQm1O9w9Iri0hoMLbW1C',
            'usuario' => 'super',
            'activo' => 1,
            'created_at' => null,
            'updated_at' => null
        ]);
    }
}
