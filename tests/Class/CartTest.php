<?php
namespace App\Tests;

use App\Class\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{

    protected $cart;

    protected function setUp():void
    {
        Cart::setTax(0.2); // la valeur est définie à la class et non à l'objet donc à toutes les instances de cette classe par défaut
        $this->cart = new Cart();
    }

    protected function tearDown(): void
    {
        // Cart::setTax(1.2);
    }

    public function testNetPriceIsCalculatedCorrectly():void
    {
         //setup
        //require './src/Class/Cart.php'; voir autoload-dev composer
        $this->cart->setPrice(1523);
        //Do something
        $netPrice = $this->cart->getNetPrice();
        $taxAmount = $this->cart->getTaxAmount();
        // Make assertions
        $this->assertEquals(1827.60, $netPrice);
        $this->assertEquals(304.60,$taxAmount);
    }

    public function testTheCartTaxValueCanBeChangedStatically():void
    {
        //setup
        //require './src/Class/Cart.php'; voir autoload-dev composer
        $this->cart->setPrice(100);

         // Do something
         $netPrice = $this->cart->getNetPrice();
 
         // Make assertions
         $this->assertEquals(120, $netPrice);
       

    }
   


    
}