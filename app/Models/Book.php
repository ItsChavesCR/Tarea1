<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; // 👈 ESTA LÍNEA FALTABA

class Book extends Model
{
    protected $fillable = [
        'title', 'copyright', 'edition', 'pages',
        'author_id', 'publisher_id'
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }
}