<?php

use Illuminate\Database\Seeder;
use App\Verification;

class VerificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Verification::class, 20)->create();
    }
}
