<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => $faker->company,
                'address' => $faker->address,
                'website' => $faker->domainName,
                'email' => $faker->email,
            ]);
        }
    }
}
