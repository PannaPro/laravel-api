<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{

    // Generate random model id 
    public static function getRandomModelId(string $model)
    {
        $count = $model::query()->count();

        if ($count === 0) {
            return $model::factory()->create();
        } else {
            return rand(1, $count);
        }
    }
}