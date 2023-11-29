<?php

use Illuminate\Database\Seeder;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin')->insert([
            'name' => "cbahir",
            'email' => 'chetanbhadarka@gmail.com',
            'pass' => '123',
        ]);
    }
}
