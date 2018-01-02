<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++) {

            $faker = \Faker\Factory::create();

            DB::table('user')->insert(
                [
                    'username'     => $faker->userName,
                    'first_name'   => $faker->firstName,
                    'last_name'    => $faker->lastName,
                    'created_date' => (new \DateTime())->format("Y-m-d"),
                    'is_active'    => 1,
                    'email'        => $faker->email,
                    'dob'          => $faker->date(),
                    'password'     => bcrypt('secret')
                ]
            );
        }

    }
}
