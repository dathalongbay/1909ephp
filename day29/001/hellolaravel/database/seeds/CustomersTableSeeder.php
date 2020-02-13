<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 20; $i++) {
            DB::table('customers')->insert([
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'age' => rand(1,100),
                'address' => Str::random(10) . " " . Str::random(10),
                'birthday' => date("Y-m-d H:i:s"),
            ]);
        }

    }
}
