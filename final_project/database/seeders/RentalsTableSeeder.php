<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('rentals')->insert([
            'rental_id'=>1,
            'ISBN'=>'978-4295007807',
            'lending'=>'貸出中',
            'emp_no'=>1234
        ]);

        DB::table('rentals')->insert([
            'rental_id'=>2,
            'ISBN'=>'978-4-06-510249-7',
            'lending'=>'貸出中',
            'emp_no'=>2345
        ]);

        DB::table('rentals')->insert([
            'rental_id'=>3,
            'ISBN'=>'9784915512377',
            'lending'=>'貸出中',
            'emp_no'=>3456
        ]);
    }
}
