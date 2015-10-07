<?php
    /**
    * Class Math
    */
    class Math {
        public static function add()
        {
            return array_sum(func_get_args());
        }
    }

    /**
    * Class Person
    */

    class Person {

        const TYPE = 'people';

        // Attribute class
        public static $info="Class of people";

        // Attribute obj
        private $age;
        private $name;

        function __construct($name = null, $age = null) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getPerson()
        {
            echo $this->name;
            echo $this->age;
        }
    }

    /**
     * Test
     */

    var_dump(Math::add(1,2,3,4));

    $joe = new Person('Joe','123');
    var_dump($joe->getPerson());

    var_dump(Person::$info);
    var_dump(Person::TYPE);
