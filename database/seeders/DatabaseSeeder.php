<?php

// kafsite/database/seeders/DatabaseSeeder.php

use App\Models\News; // 
use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run(): void
{
    News::factory(30)->create(); 
    GalleryItem::factory(12)->create(); // Створюємо 12 елементів галереї
    $this->command->info('12 тестових фото галереї створено!');
}
}