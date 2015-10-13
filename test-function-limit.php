<?php
    /**
    * Class Student
    */
    class Student
    {

        protected $name = '';
        protected $age = 0;
        protected $info = [];

        function __construct($name = null, $age = null, $address = null, $other)
        {
            $this->name = $name;
            $this->age = $age;
            $this->info['address'] = $address;
            $this->info['other'] = $other;
        }

        public function getStudent()
        {
            echo "\n Name: ".$this->name.
                 "\n Age: ".$this->age.
                 "\n Address: ".$this->info['address'].
                 "\n Other: ".$this->info['other'];

            echo $this->getInfo2nd();
        }

        private function getInfo2nd()
        {
            echo "\n Test private method of obj!!!";
        }

        private static function getInfo1st()
        {
            echo "\n Test private method of class!!!";
        }

        public static function getInfoClass()
        {
            Student::getInfo1st();
        }
    }



    /**
     * Test
     */

    $st = new Student('Duc', 23, '123 tran hung dao', 'info other');
    $st->getStudent();

    Student::getInfoClass();
