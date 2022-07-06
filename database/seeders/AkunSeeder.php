<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>'Admin',
                'role'=>'admin',
               'password'=> bcrypt('admin123'),
            ],
            [
                'username' => 'user',
               'name'=>'User (non admin)',
                'role'=>'user',
               'password'=> bcrypt('user123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
