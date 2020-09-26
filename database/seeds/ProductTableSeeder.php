<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\Category;

class ProductTableSeeder extends Seeder
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
        $f->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($f));

        $Names = Category::all()->pluck('name')->toArray();

        for ($i=0;$i<16;$i++) {
            $randCatName = $f->randomElement($Names);
            $randName = $f->randomElement($Names);

            while($randName == $randCatName) {
                $randCatName = $f->randomElement($Names);
            }

            Product::create([
                'productname' => $f->unique()->foodName(),
                'price' => $f->randomNumber(4, true),
                'catname' => $randCatName,
            ]);
        }
    }
}
