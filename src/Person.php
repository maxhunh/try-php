<?php

    namespace TryModule;

    /**
    * Class Person
    */
    class Person {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }