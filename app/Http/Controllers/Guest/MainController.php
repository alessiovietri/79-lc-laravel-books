<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Book;

class MainController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('welcome', compact('books'));
    }
}
