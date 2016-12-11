<?php

use Illuminate\Database\Seeder;

class movieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('movie')->insert(
        [
            [
              'title' => 'Predator',
              'description' => 'A team of commandos on a mission in a Central American jungle find themselves hunted by an extraterrestrial warrior.',
              'rating' => '18',
            ],
            [
              'title' => 'Predestination',
              'description' => 'PREDESTINATION chronicles the life of a Temporal Agent (Ethan Hawke) sent on an intricate series of time-travel journeys designed to prevent future killers from committing their crimes.',
              'rating' => '15',
            ],
        ]

        );
    }
}
