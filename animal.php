<?php
    interface Animal {
        public static function communicate();
    }

    /**
    * Class Dog
    */
    class Dog implements Animal {
        public static function communicate()
        {
            return "Gau Gau";
        }
    }

    /**
    * Class Cat
    */
    class Cat implements Animal {
        public static function communicate()
        {
            return "Meao";
        }
    }

    var_dump(Dog::communicate());
    var_dump(Cat::communicate());

