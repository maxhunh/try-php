<?php
    /**
    * Basic class student
    */
    class Student {

        // Atribute of class
        public $name = 'studnet name';
        public $age = 10;
        public $good = false;

        // Init method for this class
        function __construct($name = 'default name', $age = 0) {
            $this->name = $name;
            $this->age = $age;
        }

        // Public method, default function (not 'public', 'private') is public
        public function setGood()
        {
            $this->good = true;
        }

        private function genInfo()
        {
            echo "info of class";
        }


    }

$st = new Student();
var_dump($st->name, $st->age);

$st_mod = new Student('Duc', 12);
var_dump($st_mod->name, $st_mod->age, $st_mod->good);

$st_mod_2nd = new Student('Join', 30, false);
var_dump($st_mod_2nd->name, $st_mod_2nd->age, $st_mod_2nd->good);
$st_mod_2nd->setGood();
var_dump($st_mod_2nd->name, $st_mod_2nd->age, $st_mod_2nd->good);

var_dump(Student.getInfo());