<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PackageTableSeeder::class,
            StatusTableSeeder::class,
            UserTableSeeder::class,
            PlayerTableSeeder::class,
            TeamTableSeeder::class,
            ScoutTableSeeder::class,
            AcademicTableSeeder::class,
            MessageTableSeeder::class,
            VerificationTableSeeder::class,
            NoticeTableSeeder::class
        ]);
    }
}
