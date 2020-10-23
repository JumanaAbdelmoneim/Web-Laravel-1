<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('customers')->insert([
                'ID' => $i,
                'salesRepEmployeeNum' => $i,
                'Name' => 'Customer'.$i,
                'LastName' => 'Customer'.$i,
                'FirstName' => 'Customer'.$i,
                'Phone' => 'Customer'.$i,
                'Address1' => 'Customer'.$i,
                'Address2' => 'Customer'.$i,
                'State' => 'Customer'.$i,
                'City' => 'Customer'.$i,
                'PostalCode' => 'Customer'.$i,
                'Country' => $i,
                'Creditlimit' => $i
            ]);

        }
        factory(\App\Customer::class,10)->create();
    }
}
