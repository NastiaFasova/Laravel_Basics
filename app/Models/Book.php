<?php


namespace App\Models;


class Book
{
public $title;
public $author;
public $year;

    /**
     * Book constructor.
     */
    public function __construct()
    {
    }

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $year
     */
    public static function __with_data($title, $author, $year)
    {
        $book = new Book();
        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setYear($year);
        return $book;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }



    public static function getAllBooks(): array
    {
        return array(
            "To Kill a Mockingbird" => Book::__with_data("To Kill a Mockingbird","Harper Lee","1967"),
            "1984" => Book::__with_data("1984","George Orwell","1946"),
            "Harry Potter and the Philosopher's Stone" => Book::__with_data("Harry Potter and the
            Philosopher's Stone", "J.K. Rowling","1997"),
            "The Lord of the Rings" => Book::__with_data("The Lord of the Rings", "J.R.R. Tolkien",
                "1987"),
            "Pride and Prejudice" => Book::__with_data("Pride and Prejudice", "Jane Austen", "1946"),
            "The Diary Of A Young Girl" => Book::__with_data("The Diary Of A Young Girl", "Anne Frank", "1912")
        );
    }

    public function __toString()
    {
        return $this->title;
    }


}
