<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Marco Raúl Espino Contreras',
            'username'  =>  'Raul',
            'email' => 'rulo_espino@hotmail.com',
            'rol'       =>  'administrador',
            'password'  =>  Hash::make('123456')
        ]);
    }
}
