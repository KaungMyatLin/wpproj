<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Order;
use App\Product;
use App\Staff;

class OrderTableSeeder extends Seeder
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
        $staffIds = Staff::all()->pluck('id')->toArray();
        $productIds = Product::all()->pluck('id')->toArray();

        for ($i=0; $i<10; $i++) {
            $randStaffId = $f->randomElement($staffIds);
            $randProductId = $f->randomElement($productIds);
            $randsId = $f->randomElement($staffIds);
            $randpId = $f->randomElement($productIds);

            while($randpId == $randProductId) {
                $randProductId = $f->randomElement($randpId);
            }
            while($randsId == $randStaffId) {
                $randStaffId = $f->randomElement($randsId);
            }

            Order::create([
                'staffid' => $randStaffId,
                'productid' => $randProductId,
                'amount' => $f-> randomDigitNotNull,
            ]);
        }
    }
}
