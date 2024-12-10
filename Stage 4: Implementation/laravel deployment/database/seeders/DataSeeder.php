<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    public function run(): void
    {
        $file = base_path('database/seeders/iris.csv'); // Path to your CSV file
        $data = array_map('str_getcsv', file($file));
        $headers = array_shift($data); // Extract headers

        foreach ($data as $row) {
            DB::table('data')->insert(array_combine($headers, $row));
        }
    }
}

