<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_topic')->delete();
        DB::table('category_topic') -> insert ([
            'category_id' => '1',
            'topic_id' => '1'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '1',
            'topic_id' => '2'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '2',
            'topic_id' => '1'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '2',
            'topic_id' => '3'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '3',
            'topic_id' => '3'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '3',
            'topic_id' => '4'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '4',
            'topic_id' => '4'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '4',
            'topic_id' => '5'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '4',
            'topic_id' => '6'
        ]);
        DB::table('category_topic') -> insert ([
            'category_id' => '4',
            'topic_id' => '3'
        ]);
    }
}
