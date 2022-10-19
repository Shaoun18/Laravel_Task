<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=50; $i++){
            $customer = new Customer();
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->mobile = $faker->phoneNumber;
            $customer->date_of_birth = $faker->date;
            $customer->address = $faker->address;
            $customer->password = bcrypt($faker->password);
            $customer->save();
        }

    }
}
