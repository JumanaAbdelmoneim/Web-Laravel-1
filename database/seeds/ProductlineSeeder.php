<?php

use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('productlines')->insert([
               'ID' => $i ,
               'DesclnText' => 'Productline' .$i ,
               'DesclnHTML' => 'Productline' .$i ,
               'Image' => 'Productline' .$i
            ]);

        }
        factory(\App\Productline::class,10)->create();
    }
}
