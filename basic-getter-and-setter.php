<?php
    /**
    * Basic class student
    */
    class Student {
        // Atribute of class
        public $name = 'studnet name';
        public $age = 10;

        function __construct($name = null, $age = null) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age * 365;
        }

        public function setAge($age)
        {
            if ($age < 18) {
                echo "Age dont enough";
            }
            return $this->age = $age;
        }
    }



// $st = new Student('Join',32);
// var_dump($st->name, $st->age, $st->getAge());
$st = new Student('Join');
var_dump($st->name, $st->age, $st->setAge(12));
