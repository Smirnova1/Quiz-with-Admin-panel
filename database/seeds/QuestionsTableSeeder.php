<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();
        DB::table('questions')->insert([
            'type' => 'text',
            'text' => 'Is it question 1?'
        ]);
        DB::table('questions')->insert([
            'type' => 'text',
            'text' => 'Is it question 2?'
        ]);
        DB::table('questions')->insert([
            'type' => 'text',
            'text' => 'Is it question 3?'
        ]);
        DB::table('questions')->insert([
            'type' => 'radio',
            'text' => 'Is it question 4?'
        ]);
        DB::table('questions')->insert([
            'type' => 'radio',
            'text' => 'Is it question 5?'
        ]);
        DB::table('questions')->insert([
            'type' => 'radio',
            'text' => 'Is it question 6?'
        ]);
        DB::table('questions')->insert([
            'type' => 'checkbox',
            'text' => 'Is it question 7?'
        ]);
        DB::table('questions')->insert([
            'type' => 'checkbox',
            'text' => 'Is it question 8?'
        ]);
        DB::table('questions')->insert([
            'type' => 'checkbox',
            'text' => 'Is it question 9?'
        ]);
    }
}
