<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $comic = new Comic();

            $comic->name = $faker->word();
            $comic->description = $faker->text();
            $comic->stock = $faker->boolean();

            $comic->save();
        }
    }
}
