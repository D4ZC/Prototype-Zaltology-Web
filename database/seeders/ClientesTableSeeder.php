<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'name' => 'Cliente promedio',
            'contacto' => '33 3435 3637',
            'dispositivo(s)' => 'Mi cel jala chido, nada mas que',
        ]);
    }
}
