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
        factory(App\Article::class,3)->create();
        $tags = factory(App\Tag::class,3)->create();
        // Populate the pivot table
        App\Article::all()->each(function ($articles) use ($tags) {
            $articles->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
