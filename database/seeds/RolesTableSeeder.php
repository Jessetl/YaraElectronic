<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
            'rol' => 'root',
            'slug' => 'root'
        ]);

 		DB::table('roles')->insert([
            'rol' => 'administrador',
            'slug' => 'admin'
        ]);       

 		DB::table('roles')->insert([
            'rol' => 'almacenista',
            'slug' => 'almac'
        ]);

        DB::table('roles')->insert([
            'rol' => 'cajero',
            'slug' => 'caja'
        ]);

 		DB::table('roles')->insert([
            'rol' => 'usuario',
            'slug' => 'user'
        ]);

    }
}
