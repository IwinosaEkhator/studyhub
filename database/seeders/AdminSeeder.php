<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory(1)->create([
            'username' => 'Kaiser',
            'email' => 'kaiseradmin@gmail.com',
            'password' => Hash::make('password'),
            'admin_type' => 1,
        ]);
    }
}
