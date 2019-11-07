<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => "Vida no Campo",
            'content' => "Esse é um post de teste criado junto com as migrations do Laravel essa coisa linda do PHP",
            'user' => '1'
        ]);
        Post::create([
            'title' => "Vida na Cidade",
            'content' => "Esse é um post de teste criado junto com as migrations do Laravel essa coisa linda do PHP",
            'user' => '2'
        ]);
        Post::create([
            'title' => "Como fazer salpicão",
            'content' => "Esse é um post de teste criado junto com as migrations do Laravel essa coisa linda do PHP",
            'user' => '3'
        ]);
    }
}
