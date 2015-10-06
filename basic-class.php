<?php
    /**
    * Basic class student
    */
    class Student {

        // Atribute of class
        public $name = 'studnet name';
        public $age = 10;

        // Init method for this class
        function __construct($name = 'default name', $age = 0) {
            $this->name = $name;
            $this->age = $age;
        }

    }

$st = new Student();

var_dump($st->name, $st->age);

$st_mod = new Student('Duc', 12);

var_dump($st_mod->name, $st_mod->age);
