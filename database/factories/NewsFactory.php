<?php

// kafsite/database/factories/NewsFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 
use App\Models\News; // Додайте use для вашої моделі

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
{
    $title = $this->faker->sentence(6); 
    return [
        'title' => $title,
        'body' => $this->faker->paragraphs(4, true), // Використовуємо 'body'
        'slug' => Str::slug($title) . '-' . $this->faker->unique()->randomNumber(4), 
        'image_path' => null, 
        'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
    ];
}
}