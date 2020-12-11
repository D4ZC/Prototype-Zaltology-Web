<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Int_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     //Seeders (20)
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@protonmail.com',
            'password' => Hash::make('password'),
        ]);

//Llamada a los seeders que se encuentan en Database/seeders/
        $this->call(DescriptionTableSeeder::class);
        $this->call(NameItemTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ItemTableSeeder::class); 
        $this->call(ClientesTableSeeder::class); 


    }
}
