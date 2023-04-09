<?php

namespace Database\Seeders;
use App\Models\Users;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=100 ; $i++) { 
            $faker = Faker::create();
            $user = new Users();
            $user->first_name = $faker->name;
            $user->last_name = $faker->name;
            $user->save();
        }
    }
}
