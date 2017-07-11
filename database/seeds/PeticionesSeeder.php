<?php

use Illuminate\Database\Seeder;

class PeticionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peticiones')->insert([
            'id'            => '1',
            'nombre' 		=> 'Solicitud de ayudantía ordinaria',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);

        DB::table('peticiones')->insert([
            'id'            => '2',
            'nombre' 		=> 'Renovación de ayudantía ordinaria',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);

        DB::table('peticiones')->insert([
            'id'            => '3',
            'nombre' 		=> 'Solicitud de ayudantía técnica',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);

        DB::table('peticiones')->insert([
            'id'            => '4',
            'nombre' 		=> 'Renovación de ayudantía técnica',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);

        DB::table('peticiones')->insert([
            'id'            => '5',
            'nombre' 		=> 'Solicitud de beca de residencia',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);

        DB::table('peticiones')->insert([
            'id'            => '6',
            'nombre' 		=> 'Renovación de beca de residencia',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);
    }
}
