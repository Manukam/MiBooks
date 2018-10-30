<?php

class Book {
    public $id;
    public $book_name;
    public $cat_name;
    public $author_name; 


    // public function __construct($name, $bookCat, $bookAuthor){
    //     $this->name = $name;
    //     $this->bookCat = $bookCat;
    //     $this->bookAuthor = $bookAuthor;
    // }

    // public function setDetails($name, $bookCat, $bookAuthor){
    //     $this->name = $name;
    //     $this->bookCat = $bookCat;
    //     $this->bookAuthor = $bookAuthor;
    // }

    public function __toString() 
    {
        return $this->name;
    }
}

?>