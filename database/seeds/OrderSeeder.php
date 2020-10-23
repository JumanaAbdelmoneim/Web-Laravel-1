<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('orders')->insert([
                'ID' => $i,
                'CustomerID' => $i,
                'OrderDate' => time().$i,
                'RequiredDate' => time().$i,
                'ShippedDate' => time().$i,
                'Status' => $i,
                'Comments' => 'Order'.$i
            ]);

        }
        factory(\App\Order::class,10)->create();
    }
}
