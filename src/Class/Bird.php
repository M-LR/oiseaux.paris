<?php
declare(strict_types=1);

namespace App\Class;

class Bird
{
   
    private $name;
    private $latinName;

    private const WEIGHT_UNIT = 'g';
    private const WINGSPAN_UNIT = 'cm';
    private const SIZE_UNIT = 'cm';

    public function __construct()
    {
       echo self::SIZE_UNIT;
    }
}
