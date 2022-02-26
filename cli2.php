<?php

use src\Doctrine\Test;
use src\my\Class\Name;

spl_autoload_register(function ($class) {
    
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    $file = str_replace('_', DIRECTORY_SEPARATOR, $file) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
 });

$test = new Test;
$test2 = new Name;
