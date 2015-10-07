<?php

    namespace TryModule;

    /**
    * Class Staff
    */
    class Staff {

        protected $members = [];

        function __construct($members = []) {
            $this->members = $members;
        }

        public function add(User\Person $person)
        {
            $this->members[] = $person;
        }

        public function members()
        {
            return $this->members;
        }

    }