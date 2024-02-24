<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Programmer Administator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'roles_id' => 1,
        ]);

        User::create([
            'username' => 'Programmer Administator',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('password'),
            'roles_id' => 2,
        ]);

        User::create([
            'username' => 'Programmer Administator',
            'email' => 'mahasiswa@gmail.com',
            'password' => bcrypt('password'),
            'roles_id' => 3,
        ]);

        User::create([
            'username' => 'Programmer Administator',
            'email' => 'maharpuan6@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => '2021-04-06 00:00:00',
            'roles_id' => 4,
        ]);

        User::create([
            'username' => 'dijah',
            'email' => 'dijah@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => '2021-04-06 00:00:00',
            'roles_id' => 4,
        ]);

        User::create([
            'username' => 'Saipul Pajajaran',
            'email' => 'saipul@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => '2021-04-06 00:00:00',
            'roles_id' => 2,
        ]);

    }
}
