<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
    	User::create([
    		'name' => 'Daniel Nuñez Rodas',
	        'email' => 'admin@example.com',
	        'password' => bcrypt('12345678'),
	        'role' => 'admin'
    	]);

        // 2
        User::create([
            'name' => 'Paciente Test',
            'email' => 'paciente@example.com',
            'password' => bcrypt('123123'),
            'role' => 'patient'
        ]);

        // 3
        User::create([
            'name' => 'Médico Test',
            'email' => 'doctor@example.com',
            'password' => bcrypt('123123'),
            'role' => 'doctor'
        ]);

        factory(User::class, 10)->states('patient')->create();
    }
}
