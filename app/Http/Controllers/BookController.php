<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookModel = new Book();

        $books = $bookModel->get();

        foreach ($books as $book) {
            echo "nama buku: " . $book->nama_buku . '<br>';
            echo "deskripsi buku: ". $book->deskripsi . '<br>';
            echo "harga: ". $book->harga . '<br>';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Create  World!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
