<?php

use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('offices')->insert([
                'Code' => $i ,
                'City' => 'Office' .$i ,
                'Phone' => 'Office' .$i ,
                'Address1' => 'Office' .$i ,
                'Address2' => 'Office' .$i ,
                'State' => 'Office' .$i ,
                'Country' => 'Office' .$i ,
                'PostalCode' => $i ,
                'Territory' => 'Office' .$i
            ]);

        }
        factory(\App\Office::class,10)->create();
    }
}
