<?php
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