<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $Post = new Post();
            $Post->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $Post->image = $faker->imageUrl($width = 640, $height = 480);
            $Post->author = $faker->firstNameMale;
            $Post->body = $faker->paragraph;
            $Post->slug = Str::slug($Post->title);

            $Post->user_id = rand(1, 4);

            $Post->save();
        }
    }
}
