<?php

use Illuminate\Database\Seeder;


class AlgoritmQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AlgoritmQuestion::class, 100)->create();
    }
}
