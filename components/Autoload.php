<?php

/**
 * Automatically load classes
 */
function my_autoload($class_name) {  
    
    // Array of files, that may content needed classes
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    // Go throw array
    foreach ($array_paths as $path) {

        // Form path to needed class 
        $path = ROOT . $path . $class_name . '.php';

        // If file exist - include it
        if (is_file($path)) {
            include_once $path;
        }
    }
}
spl_autoload_register("my_autoload");
