<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Post;

class postAdd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Welcome on the website of DML Motors!',
            'content' => 'DML Motors now officially has a website. On this website you can find out all kinds of info about our company. Feel free to take a look between our faqs or feel free to contact us if you have any questions.',
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTN0RlnvMM6XdHgii4eHlqXPOgPyiAlTFppvw&s',
        ]);
    }
}
