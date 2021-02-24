<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) { 
            $newArticle = new Article();
            $newArticle->title = $faker->sentence(3);
            $newArticle->category_id = $faker->numberBetween(1,5);
            $newArticle->subtitle = $faker->sentence(10);
            $newArticle->body = $faker->paragraph();
            $newArticle->author = $faker->name();
            $newArticle->reading_time = $faker->randomDigitNotNull();
            $newArticle->save();
        }
    }
}
