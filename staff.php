<?php
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

    /**
    * Class Business
    */
    class Business {

        protected $staff;

        function __construct(Staff $staff) {
            $this->staff = $staff;
        }

        public function hire(Person $person)
        {
            # Add person to staff collection
            $this->staff->add($person);
        }

        public function getStaffMember()
        {
            return $this->staff->members();
        }
    }

    /**
    * Class Staff
    */
    class Staff {

        protected $members = [];

        function __construct($members = []) {
            $this->members = $members;
        }

        public function add(Person $person)
        {
            $this->members[] = $person;
        }

        public function members()
        {
            return $this->members;
        }

    }

    /**
     * Test
     */

    // Case 1 : person apply to staff of business
    $max = new Person('Max Join');
    $mulodo = new Business($staff_2nd = (new Staff([$max])));

    // Case 2 : business hire a person
    $join = new Person('Join Black');
    $mulodo->hire($join);

    // Get member of mulodo company
    var_dump($mulodo->getStaffMember());
