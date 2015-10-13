<?php
    /**
    * Class Student
    */
    abstract class Student
    {

        public $name = '';
        private $age = 0;
        private $info = [];

        function __construct($name = null, $age = 0, $address = null, $other = null)
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
            echo "\n Test private method of obj Student !!!";
        }

        private static function getInfo1st()
        {
            echo "\n Test private method of class Student !!!";
        }

        // Menote: have static is method of class
        //         private use in class
        //         public use out class
        public static function getInfoClass()
        {
            Student::getInfo1st();
        }
    }

    /**
    * Class Master
    */
    class Master extends Student
    {
        private $level = '';

        function __construct($name = null, $age = 0, $address = null, $other = null, $level = null) {
            parent::__construct($name,$age,$address,$other);
            $this->level = $level;
        }

        public function getLevelMaster()
        {
            # code...
            echo "\n Level: ".$this->level;
        }

        public static function getInfoMaster1st()
        {
            echo "\n Test private method of class Master !!!";
        }

        public function getInfoMaster2nd()
        {
            echo "\n Test private method of obj Master !!!";
        }
    }



    /**
     * Test
     */
    $st = new Master('Duc', 23, '123 tran hung dao', 'info other','level 12');
    echo $st->name;
    $st->getStudent();
    $st->getLevelMaster();
    $st->getInfoMaster2nd();

    Master::getInfoClass();
    Master::getInfoMaster1st();
