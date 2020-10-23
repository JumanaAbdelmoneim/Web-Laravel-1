<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('employees')->insert([
                'ID' => $i ,
                'OfficeCode' => $i ,
                'reportsTo' => $i ,
                'LastName' => 'Employee' .$i ,
                'FirstName' => 'Employee' .$i ,
                'Extension' => 'Employee' .$i ,
                'Email' => 'Employee' .$i ,
                'JobTitle' => 'Employee' .$i
            ]);

        }
        factory(\App\Employee::class,10)->create();
    }
}
