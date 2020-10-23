<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('payments')->insert([
                'CheckNum' => 'Payment'.$i ,
                'CustomerID' => $i,
                'PaymentDate' => time().$i,
                'Amount' => $i,
            ]);

        }
        factory(\App\Payment::class,10)->create();
    }
}
