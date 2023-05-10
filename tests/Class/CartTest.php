<?php

use App\Class\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{

    public function testNetPriceIsCalculatedCorrectly():void
    {
         //setup
        require './src/Class/Cart.php';
        $cart = new Cart();
        $priceToConvert = $cart->setPrice(59);
        //Do something
        $netPrice = $cart->getGrossPrice($priceToConvert);
        // Make assertions
        $this->assertEquals(120, $netPrice);
    }
   


    
}