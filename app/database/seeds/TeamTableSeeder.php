<?php

class TeamTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('teams')->delete();
        
        Team::create([
            'name' => 'Airsoft Team Marseille',
            'tag' => 'ATM'
        ]);
    }

}