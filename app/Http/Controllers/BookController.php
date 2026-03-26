<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Operating System Concepts',
                'author_id' => 1,
                'publisher_id' => 1
            ],
            [
                'id' => 2,
                'title' => 'Database System Concepts',
                'author_id' => 1,
                'publisher_id' => 1
            ],
            [
                'id' => 3,
                'title' => 'Computer Networks',
                'author_id' => 2,
                'publisher_id' => 2
            ],
            [
                'id' => 4,
                'title' => 'Modern Operating Systems',
                'author_id' => 2,
                'publisher_id' => 2
            ],
        ];

        return view('books.index', compact('books'));
    }
}