<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'username' => 'N4gashi',
            'email' => 'foo@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

        User::create([
            'username' => 'Mouai',
            'email' => 'mouai@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

        User::create([
            'username' => 'Kapichef',
            'email' => 'kapichef@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

        User::create([
            'username' => 'Dim',
            'email' => 'dim@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

        User::create([
            'username' => 'Horizon',
            'email' => 'horizon@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

        User::create([
            'username' => 'Lynda',
            'email' => 'lynda@bar.com',
            'password' => Hash::make('test'),
            'team_id' => 1
        ]);

    }

}