<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = new User;
        $user->name = 'Hung' ;
        $user->email = 'tuan@gmail.com';
        $user->password =Hash::make(123);
        $user->role_id = 1;
        $user->save();

        $user = new User;
        $user->name = 'An';
        $user->email = 'tuan1@gmail.com';
        $user->password =Hash::make(1234);
        $user->role_id = 2;
        $user->save();

        $user = new User;
        $user->name = 'Tuan' ;
        $user->email = 'tuan2@gmail.com';
        $user->password =Hash::make(1235);
        $user->role_id = 3;
        $user->save();
    }
}
