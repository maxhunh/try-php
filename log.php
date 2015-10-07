<?php
    interface Log {
        public function execMessage($username = null);
    }

    /**
    * Class LogToFile
    */
    class LogToFile implements Log {
        public function execMessage($username = null)
        {
            var_dump("Log have been write to file !!! " . $username);
        }
    }

    /**
    * Class LogToDatabase
    */
    class LogToDatabase implements Log {
        public function execMessage($username = null)
        {
            var_dump("Log have been write to database !!! " . $username);
        }
    }

    /**
    * Class UserController
    */
    class UserController {

        private $log;

        function __construct(Log $logtofile)
        {
            $this->log = $logtofile;
        }

        public function showLog($username = null)
        {
            return $this->log->execMessage($username);
        }
    }

    /**
     * Test
     */

    $controller = new UserController(new LogToDatabase);
    $controller->showLog('Join Black');
    $controller = new UserController(new LogToFile);
    $controller->showLog('Join Black');