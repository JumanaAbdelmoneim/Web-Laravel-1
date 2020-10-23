<?php

use Illuminate\Database\Seeder;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('order__products')->insert([
                'ID' => $i ,
                'OrderID' => $i ,
                'ProductCode' => $i ,
                'Qty' => $i ,
                'PriceEach' => $i ,
            ]);

        }
        factory(\App\Order_Product::class,10)->create();
    }
}
