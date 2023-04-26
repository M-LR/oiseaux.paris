<?php

//phpinfo();
// php -S localhost:8000 index.php
// realpath($_SERVER["DOCUMENT_ROOT"]);
// équivalent à :
$path = dirname(__DIR__);
//Définition des constantes
define("PATH", $path);
// => "/Users/mleray/Sites/www.oiseaux.paris
//Autoloader initial
//require_once( PATH . '/config/autoloader.php');
//php-fig.org -> standard php
