<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	['name'=>'admin1',
        	'pass'=>bcrypt('123'),
        	'email'=>'admin1@gmail.com'
        	],
        	['name'=>'admin2',
        	'pass'=>bcrypt('123'),
        	'email'=>'admin2@gmail.com'
        	]
        ];
        DB::table('admin')->insert($data);
    }
}
