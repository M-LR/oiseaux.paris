<?php
declare(strict_types=1);

namespace App\Controllers;

/////////PROVISOIRE//////////////////
//require_once('../../config/global.php');
//Autoloader composer
//si modification relancer la commande composer dump-autoload
//require '../../vendor/autoload.php';
/////////FIN DU PROVISOIRE///////////


use App\Class\Bird;

class BirdController
{

   private $bird;

   public function __construct()
   {
      $this->bird = new Bird();
   }


   public function birdInformations(): string
   {
      //PHP 8 on peut ignorer le premier paramètre / argument de la méthode getGeneralBirdInformations en nommant le deuxième paramètre sans le $
       return $this->bird->getGeneralBirdInformations(currencySymbol: '$ : ');
   }

   public function getBirdIdentification(): string
   {
      return $this->bird->getHexId();
   }
}
