<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory; // ❗ ПОТРІБНИЙ USE ❗
use App\Models\GalleryItem;
use Illuminate\Support\Str; // Якщо ви використовуєте Str::slug

class GalleryItemFactory extends Factory
{
    protected $model = GalleryItem::class; // Посилання на модель

    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        $filename = $this->faker->unique()->numberBetween(1, 50) . '.jpg';
        return [
            'title' => $title,
            'file_path' => 'http://placehold.it/1024x768?text=Фото+' . $filename,
            'thumbnail_path' => 'http://placehold.it/300x200?text=Мініатюра+' . $filename,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}