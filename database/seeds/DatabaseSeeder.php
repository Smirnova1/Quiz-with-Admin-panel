<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            TopicsTableSeeder::class,
            CategoryTopicTableSeeder::class,
            QuestionsTableSeeder::class,
            QuestionTopicTableSeeder::class,
            OptionsTableSeeder::class
        ]);
    }
}
