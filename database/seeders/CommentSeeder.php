<?php

namespace Database\Seeders;

use App\Models\Comment;
use Database\Seeders\Traits\DisableForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, DisableForeignKey;
    public function run(): void
    {
        $this->disableForeignKey();

        $this->TruncateTable('comments');

        Comment::factory(3)->create();

        $this->enableForeignKey();
    }
}
