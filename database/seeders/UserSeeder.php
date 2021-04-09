<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Alex Pachas',
            'email'=>'Alex.Pachas@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('SuperUsuario');
        User::factory(15)->create();        
    }
}
