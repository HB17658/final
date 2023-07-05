<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('emps')->insert([
            'emp_no'=>1234,
            'pass'=>'1234'
        ]);

        DB::table('emps')->insert([
            'emp_no'=>2345,
            'pass'=>'2345'
        ]);

        DB::table('emps')->insert([
            'emp_no'=>3456,
            'pass'=>'3456'
        ]);
    }
}
