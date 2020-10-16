<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Origin Master',
            'email' => 'originmasterg11@gmail.com',
            'password' => \Hash::make('@pepino123'),
            'role' => 'admin',
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);
    }
}
