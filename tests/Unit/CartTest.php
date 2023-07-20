<?php

use PHPUnit\Framework\TestCase;
use ShoppingCart\Cart;
use ShoppingCart\Interfaces\ProductInterface;
use ShoppingCart\Product;

class CartTest extends TestCase {
    private $productMock;
    private $cartMock;
    
    public function setUp(): void {
        $this->productMock = $this->getMockBuilder(Product::class)
        ->getMock();

        $this->cartMock = $this->getMockBuilder(Cart::class)
        ->disableOriginalConstructor()
        ->getMock();

    }
    public function testaddProduct() {
        

    }
}

?>