<?php
//Import des fichiers de configuration

use App\Controllers\BirdController;

require_once('../config/global.php');
//Autoloader composer
//si modification relancer la commande composer dump-autoload
require '../vendor/autoload.php';


$bird = new BirdController();
var_dump($bird);
var_dump($path);
phpinfo();