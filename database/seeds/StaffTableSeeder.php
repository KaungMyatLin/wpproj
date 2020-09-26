<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $f = Faker::create();
        for ($i=0; $i<30; $i++) {
            Staff::create([
                'email' => $f->unique()->freeEmail,
                'password' => $f->password,
                'contactno' => $f->numberBetween($min = 1000, $max = 9999),
                'gender' => "male"
            ]);
        }
    }
}
