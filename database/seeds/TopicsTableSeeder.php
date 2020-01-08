<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->delete();
        DB::table('topics') -> insert ([
            'name' => 'Topic1'
        ]);
        DB::table('topics') -> insert ([
            'name' => 'Topic2'
        ]);
        DB::table('topics') -> insert ([
            'name' => 'Topic3'
        ]);
        DB::table('topics') -> insert ([
            'name' => 'Topic4'
        ]);
        DB::table('topics') -> insert ([
            'name' => 'Topic5'
        ]);
        DB::table('topics') -> insert ([
            'name' => 'Topic6'
        ]);
    }
}
