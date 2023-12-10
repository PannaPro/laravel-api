<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKey;
    public function run(): void
    {
        $this->disableForeignKey();

        $this->TruncateTable('posts');

        Post::factory(3)
            ->has(Comment::factory(3), 'comments')
            ->state([
                'title' => 'untitled'
            ])
            ->create();

        $this->enableForeignKey();
    }
}
