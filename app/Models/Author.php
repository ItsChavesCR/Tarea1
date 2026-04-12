<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
    'name',
    'nationality',
    'birth',
    'fields'
];

    public function books() {
        return $this->hasMany(Book::class);
    }
}