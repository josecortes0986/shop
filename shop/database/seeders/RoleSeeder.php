<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::insert([
        [
            'role'=>'Usuario',
            'description'=>'Usuario de nivel basico.',

        ],
        [
            'role'=>'Moderador',
            'description'=>'Usuario con cierto nivel de control de la BD.',

        ],
        [
            'role'=>'Administrador',
            'description'=>'Usuario Administrador de la BD y del aplicativo.',

        ],
        [
            'role'=>'Observador',
            'description'=>'Usuario que puede vizualizar todo en la App y en la BD pero no puede intervenir en las mismas.',

        ]
       ]);
    }
}
