<?php

    require 'vendor/autoload.php';

    /**
     * Test
     */

    // Case 1 : person apply to staff of business
    $max = new TryModule\Person('Max Join');
    $mulodo = new TryModule\Business($staff_2nd = (new TryModule\Staff([$max])));

    // Case 2 : business hire a person
    $join = new TryModule\Person('Join Black');
    $mulodo->hire($join);

    // Get member of mulodo company
    var_dump($mulodo->getStaffMember());
