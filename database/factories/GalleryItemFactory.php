<?php

namespace Database\Factories;

use App\Models\GalleryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GalleryItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //  ВИКОРИСТАННЯ ЛОКАЛЬНОГО ШЛЯХУ (Файл має бути у public/img/placeholder.png)
        $localPath = 'img/placeholder.png'; 

        return [
            'title' => $this->faker->sentence(3),
            'file_path' => $localPath, 
            'thumbnail_path' => $localPath,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}