<?php 
namespace ShoppingCart;

use ShoppingCart\Interfaces\ProductInterface;

class Product implements ProductInterface {
    protected $name;

    protected $unitprice;

    protected $specialprice;

    public function __construct(string $name, float $unitprice, array $specialprice = [])
    {
        $this->name = $name;
        $this->unitprice = $unitprice;
        $this->specialprice = $specialprice;
    }


    public function getName(): string {
        return $this->name;
    }
    public function getUnitPrice(): float {
        return $this->unitprice;
    }
    public function getSpecialPrice(): Array {
        return $this->specialprice;
    }

}

?>