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
                'nim' => '20129090',
                'password' => Hash::make('00000'),
                'role' => 'admin'
            ],
            [
                'name' => 'Bagas',
                'nim' => '20129091',
                'password' => Hash::make('00000'),
                'role' => 'admin'
            ],
            [
                'name' => 'Irwan',
                'nim' => '20129092',
                'password' => Hash::make('00000'),
            ],
        ];

        foreach ($adminUsers as $adminUser) {
            if (!User::where('nim', $adminUser['nim'])->exists()) {
                User::create($adminUser);
            }
        }
    }
}
