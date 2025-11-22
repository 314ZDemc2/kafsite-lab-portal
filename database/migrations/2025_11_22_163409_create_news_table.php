<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('news', function (Blueprint $table) {
        $table->id();
        // ❗ ПЕРЕВІРТЕ НАЯВНІСТЬ ЦИХ ПОЛІВ ❗
        $table->string('title', 255);       // Заголовок новини
        $table->string('slug', 255)->unique(); // Унікальний slug
        $table->text('body');               // Основний текст (у фабриці використовується 'body', а не 'content')
        $table->string('image_path')->nullable(); // Шлях до зображення
        // ❗ КІНЕЦЬ ПЕРЕВІРКИ ❗
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
