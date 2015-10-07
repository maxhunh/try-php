<?php

    /**
     * Test
     */

    use TryModule\User\Person;
    use TryModule\Business;
    use TryModule\Staff;

    // Case 1 : person apply to staff of business
    $max = new Person('Max Join');
    $mulodo = new Business($staff_2nd = (new Staff([$max])));

    // Case 2 : business hire a person
    $join = new Person('Join Black');
    $mulodo->hire($join);

    // Get member of mulodo company
    var_dump($mulodo->getStaffMember());
