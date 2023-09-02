<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i < 10; $i++) { 
            $post = new Post;
            $post->tittle = 'TITULO $i';
            $post->summary = 'resumen $i';
            $post->content = 'contenido $i';
            $post->user_id = 2;
            $post->tag_id = 2;
            $post->save();
        }
    }
}
