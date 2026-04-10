<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create() {
        return view('authors.create');
    }

    public function store(Request $request) {
        Author::create($request->all());
        return redirect('/authors');
    }

    public function show($id) {
        $author = Author::with('books')->findOrFail($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id) {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id) {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect('/authors');
    }

    public function destroy($id) {
        Author::destroy($id);
        return redirect('/authors');
    }
}