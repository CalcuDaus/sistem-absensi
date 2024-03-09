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
        $user_akun = [
            [
                'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'level' => 'admin'
            ],
            [
                'nama' => 'daus',
                'email' => 'daus@gmail.com',
                'password' => bcrypt('daus'),
                'level' => 'instruktur'
            ]
            ];

            foreach ($user_akun as $key => $value) {
                User::create($value);
            }
    }
}
