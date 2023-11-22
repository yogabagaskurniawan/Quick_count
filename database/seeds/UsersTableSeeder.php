<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUsers = [ // Perubahan pada variabel ini
            [
                'name' => 'Admin',
                'nim' => '111',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Bagas',
                'nim' => '222',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Irwan',
                'nim' => '333',
                'password' => Hash::make('123'),
            ],
        ];

        foreach ($adminUsers as $adminUser) {
            if (!User::where('nim', $adminUser['nim'])->exists()) {
                User::create($adminUser);
            }
        }
    }
}
