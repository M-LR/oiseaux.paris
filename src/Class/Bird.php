<?php
declare(strict_types=1);

namespace App\Class;

class Bird
{
   
    private $name;
    private $latinName;
    //Possibilité d'utiliser les enums php si besoin -> https://www.php.net/manual/fr/language.types.enumerations.php
    //https://youtu.be/Z69z1IZ1aQk?t=4512
    private const WEIGHT_UNIT = 'g';
    private const WINGSPAN_UNIT = 'cm';
    private const SIZE_UNIT = 'cm';

    public function __construct()
    {
       echo self::SIZE_UNIT;
    }
}
