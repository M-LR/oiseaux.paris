<?php # src/Cart.php
declare(strict_types=1);

namespace App\Class;

class Cart
{
    private float $price;
    private static float $tax = 0.2;

    //METHODS
    public function getNetPrice(): float
    {
         return ($this->price * self::$tax) + $this->price;
         
    }

    public function getTaxAmount(): float
    {
        return $this->price * self::$tax;
    }

    //SETTERS
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public static function setTax($tax): void
    {
        self::$tax = $tax;
    }

   
}
