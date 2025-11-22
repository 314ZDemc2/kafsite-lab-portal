<?php

// kafsite/database/seeders/DatabaseSeeder.php

use App\Models\News; // ❗ Не забудьте додати це ❗
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Створюємо 15 тестових записів у таблиці news
        News::factory(15)->create();
        $this->command->info('15 тестових новин створено!');
    }
}