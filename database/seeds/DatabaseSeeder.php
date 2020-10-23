<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\ProductlineSeeder::class);
        $this->call(\ProductSeeder::class);
        $this->call(\Order_ProductSeeder::class);
        $this->call(\EmployeeSeeder::class);
        $this->call(\CustomerSeeder::class);
        $this->call(\OrderSeeder::class);
        $this->call(\PaymentSeeder::class);
        $this->call(\OfficeSeeder::class);
    }
}
