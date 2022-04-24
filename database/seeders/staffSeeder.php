<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'firstName'=>'Sanjay',
                'lastName'=>'Thapa',
                'email'=>'sanjay@gmail.com'
            ],
            [
                'firstName'=>'Dan',
                'lastName'=>'Man',
                'email'=>'dan@gmail.com'
            ]
        ];
        DB::table('staff')->insert($data);
    }
}
