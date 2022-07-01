<?php

use Illuminate\Database\Seeder;
use App\UserRegistration;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserRegistration::factory()->count(3)->create();
    }
}
