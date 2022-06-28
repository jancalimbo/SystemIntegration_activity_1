<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Jan Marie Calimbo',
                'email'=> 'janny@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'John Doe',
                'email'=> 'doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('doe123456')
            ],

            [
                'name'=> 'Snowwhite Beluga',
                'email'=> 'whitebeluga@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('kikg123456')
            ],
            [
                'name'=> 'Harry Potter',
                'email'=> 'harry@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('harry12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
