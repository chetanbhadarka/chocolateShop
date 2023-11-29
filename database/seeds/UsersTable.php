<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "chetan",
            'email' => 'chetan@outlook.com',
            'pass' => '123',
            'address' => 'Junagadh',
        ]);
    }
}
