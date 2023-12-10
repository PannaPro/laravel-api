<?php


namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    public function TruncateTable($tableName)
    {
        DB::table($tableName)->truncate();
    }
}
