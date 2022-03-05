<?php

use src\Doctrine\Test;
use src\my\Class\Name;

spl_autoload_register(function ($class) {
    
    $file = sprintf("%s.php", str_replace(['_', ''], DIRECTORY_SEPARATOR, $class));
    if (file_exists($file)) {
        require $file;
    }
 });


