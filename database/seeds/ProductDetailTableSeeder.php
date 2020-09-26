<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\ProductDetail;

class ProductDetailTableSeeder extends Seeder
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
        $productIds = Product::all()->pluck('id')->toArray();

        for($i=0;$i<10;$i++) {
            $randpId = $f->randomElement($productIds);
            $randId = $f->randomElement($productIds);
            
            while ($randId == $randpId) 
                $randpId = $f->randomElement($productIds);

            ProductDetail::create([
                'image' => null,
                'product_id' => $randpId,
            ]);
        }
    }
}
