<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tags;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new Tags;
        $tag->name = 'Maicol Hidalgo';
        $tag->description = "descripcion";
        $tag->save();

        for ($i=0; $i < 10; $i++) { 
            $tag = new Tags;
            $tag->name = "Tag $i";
            $tag->description = "Descripción $i";

            $tag->save();
        }
    }
}
