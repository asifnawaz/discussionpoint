<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 10 ; $i++){
            User::create([
                'name' => $faker->name,
                'email'     => $faker->email,
                'phone'     => $faker->phone,
                'password'     => $faker->password,
                'bio'   => $faker->paragraph,
                'profile_image_path' => $faker->imageUrl($width = 200, $height = 200),
            ]);
        } 
    }
}
