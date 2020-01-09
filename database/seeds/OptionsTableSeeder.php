<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->delete();
        DB::table('options')->insert([
            'question_id' => '1',
            'text' => 'answer to question 1',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '2',
            'text' => 'answer to question 2',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '3',
            'text' => 'answer to question 3',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '4',
            'text' => 'right option to question 4',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '4',
            'text' => 'option to question 4',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '4',
            'text' => 'option to question 4',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '5',
            'text' => 'option to question 5',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '5',
            'text' => 'right option to question 5',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '5',
            'text' => 'option to question 5',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '6',
            'text' => 'option to question 6',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '6',
            'text' => 'option to question 6',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '6',
            'text' => 'right option to question 6',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '7',
            'text' => 'right option to question 7',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '7',
            'text' => 'right option to question 7',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '7',
            'text' => 'option to question 7',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '7',
            'text' => 'option to question 7',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '8',
            'text' => 'option to question 8',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '8',
            'text' => 'option to question 8',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '8',
            'text' => 'right option to question 8',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '8',
            'text' => 'right option to question 8',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '9',
            'text' => 'option to question 9',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '9',
            'text' => 'right option to question 9',
            'is_correct' => '1'
        ]);
        DB::table('options')->insert([
            'question_id' => '9',
            'text' => 'option to question 9',
            'is_correct' => '0'
        ]);
        DB::table('options')->insert([
            'question_id' => '9',
            'text' => 'right option to question 9',
            'is_correct' => '1'
        ]);
    }
}
