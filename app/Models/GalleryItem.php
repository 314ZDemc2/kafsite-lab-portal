<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ❗ ПОТРІБНИЙ USE ❗
use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    use HasFactory; // ❗ ПОТРІБНИЙ ТРЕЙТ ❗

    protected $fillable = [
        'title',
        'file_path',
        'thumbnail_path',
    ];
}