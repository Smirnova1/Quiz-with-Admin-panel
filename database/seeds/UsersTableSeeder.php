<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id' => '1',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin')
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'role_id' => '2',
            'email' => 'user@example.com',
            'password' => bcrypt('user')
        ]);
    }
}
