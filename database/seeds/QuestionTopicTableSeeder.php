<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_topic')->delete();
        DB::table('question_topic')->insert([
            'question_id' => '1',
            'topic_id' => '1'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '4',
            'topic_id' => '1'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '7',
            'topic_id' => '1'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '2',
            'topic_id' => '2'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '5',
            'topic_id' => '2'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '8',
            'topic_id' => '2'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '3',
            'topic_id' => '3'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '6',
            'topic_id' => '3'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '9',
            'topic_id' => '3'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '1',
            'topic_id' => '4'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '5',
            'topic_id' => '4'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '9',
            'topic_id' => '4'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '2',
            'topic_id' => '5'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '4',
            'topic_id' => '5'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '8',
            'topic_id' => '5'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '3',
            'topic_id' => '6'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '6',
            'topic_id' => '6'
        ]);
        DB::table('question_topic')->insert([
            'question_id' => '7',
            'topic_id' => '6'
        ]);

    }
}
