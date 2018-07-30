<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('123456'),
            //'password' => '123456',
            'remember_token'   =>str_random(15),
            'status' => 1,
            'branch_id' => 1,
        ]);
    }
}
