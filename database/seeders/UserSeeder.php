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
            'name' => 'Administrator',
            'email' => 'denisabizar54@gmail.com',
            'password' => bcrypt('abizar54'),
            'email_verified_at' => now()
        ]);
        
    }
}
