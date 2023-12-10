<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\DisableForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    use TruncateTable, DisableForeignKey;

    public function run(): void
    {
        $this->disableForeignKey();
       
        $this->TruncateTable('users');
       
        User::factory(10)->create();
       
        $this->enableForeignKey();
    }
}
