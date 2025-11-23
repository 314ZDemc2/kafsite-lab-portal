<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;
    
    // Дозволяємо масове заповнення цих полів
    protected $fillable = [
        'name',
        'email',
        'message',
        'is_read',
    ];
}