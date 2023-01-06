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
           
            'kode' => 'A1',
            'fullname' => 'Ucok Sitorus',
            'username' => 'Ucok',
            'password' => bcrypt('password'),			
            'verif' => 'default',
            'role' => 'admin',
            'join_date' => '2023-01-06',
            'foto' => ''
        ]);

        User::create([
           
            'kode' => 'A2',
            'nis' => '12345',
            'fullname' => 'Robben Ezackly',
            'username' => 'benzy',
            'password' => bcrypt('password'),			
            'kelas' => 'XII RPL',	
            'verif' => 'default',
            'role' => 'user',
            'join_date' => '2023-01-06',
            'foto' => ''
        ]);

        User::create([
           
            'kode' => 'A3',
            'nis' => '12456',
            'fullname' => 'koresj',
            'username' => 'koresj',
            'password' => bcrypt('password'),			
            'kelas' => 'XII RPL',	
            'verif' => 'default',
            'role' => 'user',
            'join_date' => '2023-01-06',
            'foto' => ''
        ]);
    }
}
