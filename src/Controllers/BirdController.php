<?php
declare(strict_types=1);

namespace App\Controllers;




use App\Class\Bird;

class BirdController
{

   private $bird;

   public function __construct()
   {
      $this->bird = new Bird();
   }


   public function birdInformations()
   {
      //PHP 8 on peut ignorer le premier paramètre / argument de la méthode getGeneralBirdInformations en nommant le deuxième paramètre sans le $
       return $this->bird->getGeneralBirdInformations(currencySymbol: '$ : ');
   }
}

