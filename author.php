<?php
    /**
    * Class Author
    */
    class Author {

        private $name;
        private $birth;

        function __construct($name = null, $birth = null)
        {
            $this->name = $name;
            $this->birth = $birth;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getBirth()
        {
            return $this->birth;
        }
    }

    /**
    * Class Book
    */
    class Book {

        private $author;

        public function getAuthor()
        {
            return $this->author;
        }

        public function setAuthor($author)
        {
            # Debug Code
            echo "========================\n";
            var_dump($author->getBirth());
            echo "========================\n";
            $this->author = $author;
        }

    }

    /**
     * Test
     */
    $book_2th = new Book;
    $book_2th->setAuthor(new Author("Nam Cao","12-19-0001"));
    var_dump($book_2th->getAuthor());

    $book_1st = new Book;
    $book_1st->setAuthor("Nam Cao"); #-> error
    var_dump($book_1st->getAuthor());

