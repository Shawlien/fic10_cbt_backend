<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Ulin',
            'email' => 'ulin@gmail.com',
            'password' => Hash::make('123456789'),
            'roles' => 'ADMIN',
            'phone' => '083108310831',
        ]);
    }
}
