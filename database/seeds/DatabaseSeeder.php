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
        factory(App\Exchange::class, 10)->create();
        factory(App\Student::class, 5)->create();
        factory(App\News::class, 15)->create();
        factory(App\User::class)->create();
    }
}
