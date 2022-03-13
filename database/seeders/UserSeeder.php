<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'John Lennon';
        $user->email = 'john@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make("123123");
        $user->save();
    }
}
