<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author', 'publisher')->get();
        return view('books.index', compact('books'));
    }

    public function create() {
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('books.create', compact('authors', 'publishers'));
    }

    public function store(Request $request) {
        Book::create($request->all());
        return redirect('/books');
    }

    public function show($id) {
        $book = Book::with('author', 'publisher')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('books.edit', compact('book', 'authors', 'publishers'));
    }

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect('/books');
    }

    public function destroy($id) {
        Book::destroy($id);
        return redirect('/books');
    }
}