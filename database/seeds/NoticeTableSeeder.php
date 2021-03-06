<?php

use Illuminate\Database\Seeder;
use App\Notice;

class NoticeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notice::class, 20)->create();
    }
}
