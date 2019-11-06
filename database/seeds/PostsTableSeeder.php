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
            'title' => "Um post de Teste",
            'content' => "Esse é um post de teste criado junto com as migrations do Laravel essa coisa linda do PHP",
            'user' => '1'
        ]);
    }
}
