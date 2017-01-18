<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Testman',
                'dob' => '1984-09-14',
                'email' => str_random(12).'@email.com',
                'password' => bcrypt('yourPassword'),
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ],
            [
                'name' => 'Scott Tryson',
                'dob' => '1984-09-14',
                'email' => str_random(12).'@email.com',
                'password' => bcrypt('yourPassword'),
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ],
            [
                'name' => 'Salami Donkey',
                'dob' => '1984-09-14',
                'email' => str_random(12).'@email.com',
                'password' => bcrypt('yourPassword'),
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ],
        ]);
    }
}
