<?php
//Autoloader
// N'EST PLUS UTILISÉ
spl_autoload_register(function($fqcn){
    //dirname(__DIR__) racine du site 
   $class = PATH. '/' . str_replace('\\','/',$fqcn) . '.php';
        //var_dump('chemin : '. PATH); => string(46) "chemin : /Users/mleray/Sites/www.oiseaux.paris" string(63)
        //var_dump('FQCN : '. $class); => string(63) "FQCN : /Users/mleray/Sites/www.oiseaux.paris/src/Class/Bird.php"
    //Si la classe existe on la charge
    if (file_exists($class)) {
    require($class);
    }
    
});