<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Player::class, 20)->create();
    }
}
