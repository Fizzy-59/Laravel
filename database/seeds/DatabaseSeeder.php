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
        // Appel le seeder de person table seeder qui va lui même appeler le Factory
        $this->call(PersonTableSeeder::class);
    }
}
