<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'Code' => $i ,
                'ProductlineID' => $i ,
                'Name' => 'Product' .$i ,
                'Scale' => $i ,
                'vendor' => 'Product' .$i ,
                'PdtDescription' => 'Product' .$i ,
                'QtyinStock' => $i ,
                'BuyPrice' => $i ,
                'MSRP' => $i
            ]);

        }
        factory(\App\Product::class,10)->create();
    }
}
