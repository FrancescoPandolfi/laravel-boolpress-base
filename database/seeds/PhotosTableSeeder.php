<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPhoto = new Photo();
            $newPhoto->image_path = $faker->imageUrl($width = 640, $height = 480);
            $newPhoto->user_id = rand(1, 4);
            $newPhoto->save();
        }
    }
}
