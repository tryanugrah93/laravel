<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id-ID');

        for($i = 1; $i <= 50; $i++) {
            // insert data into employee table
            DB::table('employee')->insert([
            'employee_name'=>$faker->name,
            'employee_position'=>$faker->jobTitle,
            'employee_age'=>$faker->numberBetween(25,40),
            'employee_address'=>$faker->address
        ]);
        }
    }
}
