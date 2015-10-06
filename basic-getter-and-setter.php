<?php
    /**
    * Basic class student
    */
    class Student {
        // Atribute of class
        private $name = 'studnet name';
        private $age = 10;

        // Only use get set method
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

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            return $this->name = $name;
        }
    }


$st = new Student('Join',30);
var_dump($st->getName(), $st->getAge());

$st->setName('New Join');
$st->setAge(30);
var_dump($st->getName(), $st->getAge());
