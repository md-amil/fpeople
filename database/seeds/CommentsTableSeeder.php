<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump('Inserting comments');
        factory(App\Comment::class, 1000)->create();
    }
}
