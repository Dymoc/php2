<?php


class Autoload
{

    // private $path = [
    //     'models',
    //     'engine',
    //     'interfaces'
    // ];

    function loadClass($className) {
        // var_dump($className);
        $className = str_replace(
            ["\\", "app"],
            ["/", ""],
            $className);
        // var_dump("..\{$className}");

        include "../{$className}.php";
    }
}

