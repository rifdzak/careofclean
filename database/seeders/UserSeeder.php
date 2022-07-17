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
        User::truncate();
        User::create([
        'email' => 'admin@admin.com',
        'nama'=> 'Admin',
        'username'=> 'superadmin',
        'password' => bcrypt('12345'),
        'alamat'=> 'Jalan sudirman',
        'no_hp'=> '09809249124',
        'gender'=> 'Laki-Laki',

        ]);

        User::create([
        'email' => 'pengepul@pengepul.com',
        'nama'=> 'Pengepul',
        'username'=> 'pengepul',
        'password' => bcrypt('12345'),
        'alamat'=> 'Jalan mawar',
        'no_hp'=> '088798235253',
        'gender'=> 'Laki-Laki',
        ]);
    }
}
