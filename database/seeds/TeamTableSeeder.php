<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\User;
use Faker\Factory as faker;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Team::class, 20)->create();
    }
}
