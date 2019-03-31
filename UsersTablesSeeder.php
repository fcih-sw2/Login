<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name'    => 'mohammed yossef',
            'email'    => 'mohammedyossef843@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
