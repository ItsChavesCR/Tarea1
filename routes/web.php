<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;

Route::get('/', function () {
    return view('home');
});

// 📚 BOOKS
Route::get('/books', [BookController::class, 'index']);

// ✍️ AUTHORS
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// 🏢 PUBLISHERS
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);


// 🚀 RUTA TEMPORAL PARA INSERTAR DATOS (SIN DUPLICADOS)
Route::get('/test-data', function () {

    // Crear o buscar autor
    $author = Author::firstOrCreate(
        ['name' => 'Gabriel García Márquez'],
        [
            'nationality' => 'Colombia',
            'birth' => '1927-03-06',
            'fields' => 'Literatura'
        ]
    );

    

    // Crear o buscar editorial
    $publisher = Publisher::firstOrCreate(
        ['name' => 'Editorial Sudamericana'],
        [
            'country' => 'Argentina',
            'founded' => '1939',
            'genre' => 'Literatura'
        ]
    );

    // Crear libro solo si no existe
    Book::firstOrCreate(
        ['title' => 'Cien años de soledad'],
        [
            'copyright' => '1967',
            'edition' => 'Primera',
            'pages' => 471,
            'author_id' => $author->id,
            'publisher_id' => $publisher->id
        ]
    );

    return "Datos insertados correctamente ✅";
});