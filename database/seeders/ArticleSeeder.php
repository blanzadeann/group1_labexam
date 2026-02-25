<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    Article::create([
        'title' => 'Tech News',
        'content' => 'Latest updates in technology.',
        'category' => 'Tech',
        'status' => 'Published',
        'published_at' => now(),
    ]);

    Article::create([
        'title' => 'Sports Update',
        'content' => 'Recent sports highlights.',
        'category' => 'Sports',
        'status' => 'Draft',
    ]);
}
}
