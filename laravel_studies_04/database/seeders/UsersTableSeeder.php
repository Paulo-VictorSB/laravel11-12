<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('users')->insert([
                'username'       => $faker->name,
                'password'   => Hash::make('senha123'),
                'active'     => (bool) rand(0,1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
