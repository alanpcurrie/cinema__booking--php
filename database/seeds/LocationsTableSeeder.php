<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('locations')->insert(
            [
              [
                'location' => 'Edinburgh',
              ],
              [
                'location' => 'Midlothian',
              ],
              [
                'location' => 'Eastlothian',
              ],
              [
                'location' => 'WestLothian',
              ],
            ]
        );
    }
}
