<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filesStorage = Storage::disk('public')->allFiles("/");

        return [
            'comment_id' => rand(1,5),
            'file_url' => Storage::disk('public')
                ->url($filesStorage[array_rand($filesStorage)]),
        ];
    }
}
