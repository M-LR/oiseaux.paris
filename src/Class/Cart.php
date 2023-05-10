<?php # src/Cart.php
declare(strict_types=1);

namespace App\Class;

class Cart
{
    private float $price;
    private float $tva;

    public function __construct(float $tva = 20) {
        $this->tva = $tva;
    }

    public function getGrossPrice(): float 
    {
        $tax = $this->price * ($this->tva / 100);
        $grossPrice = $this->price + $tax;
        return $grossPrice;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setTva(float $tva): self
    {
        $this->tva = $tva;
        return $this;
    }

    public function getTva(): float
    {
        return $this->tva;
    }
}
