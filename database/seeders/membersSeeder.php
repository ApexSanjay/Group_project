<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class membersSeeder extends Seeder
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
                'age'=>21,
                'email'=>'test@gmail.com'
            ],
            [
                'firstName'=>'Daniel',
                'lastName'=>'Lui',
                'age'=>21,
                'email'=>'daniel@gmail.com'
            ]
        ];
        DB::table('members')->insert($data);
}
}
