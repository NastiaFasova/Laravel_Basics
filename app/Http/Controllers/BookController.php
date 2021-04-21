<?php


namespace App\Http\Controllers;


use App\Http\BookRequest;
use App\Models\Book;

class BookController
{
    public $model;

    public function getAllBooks()
    {
        $this->model = new Book();
        $books = $this->model->getAllBooks();
        return view('books', ['books' => $books]);
    }

    public function create(BookRequest $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $year = $request->input('year');
        $book = Book::__with_data($title, $author, $year);
        echo "The book $book was created";
    }

}
