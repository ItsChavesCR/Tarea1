<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    private $authors = [
        1 => [
            'id' => 1,
            'name' => 'Abraham Silberschatz',
            'nationality' => 'Israelis / American',
            'birth_year' => 1952,
            'fields' => 'Database Systems, Operating Systems',
            'books' => [
                ['id' => 1, 'title' => 'Operating System Concepts'],
                ['id' => 2, 'title' => 'Database System Concepts']
            ]
        ],
        2 => [
            'id' => 2,
            'name' => 'Andrew S. Tanenbaum',
            'nationality' => 'Dutch / American',
            'birth_year' => 1944,
            'fields' => 'Distributed computing, Operating Systems',
            'books' => [
                ['id' => 3, 'title' => 'Computer Networks'],
                ['id' => 4, 'title' => 'Modern Operating Systems']
            ]
        ]
    ];

    public function index()
    {
        return view('authors.index', ['authors' => $this->authors]);
    }

    public function show($id)
    {
        $author = $this->authors[$id];
        return view('authors.show', compact('author'));
    }
}
