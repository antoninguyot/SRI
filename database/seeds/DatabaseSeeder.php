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
        factory(App\Semester::class)->create();
        factory(App\News::class)->create();
        factory(App\User::class)->create();
    }
}
