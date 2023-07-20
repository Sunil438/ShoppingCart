<?php

use PHPUnit\Framework\TestCase;
use ShoppingCart\Product;

class ProductTest extends TestCase {
    private $productMock;
    public function setUp(): void {
        $specialPrice = array(
            "quantity" => 3,
            "specialPrice" => 35
        );
        

        $this->productMock = $this->getMockBuilder(Product::class)
        ->setConstructorArgs(["A", 10, $specialPrice])
        ->getMock();

    }
    public function testfetchProductName() {
        $this->productMock->expects($this->any())
        ->method('getName')
        ->willReturn("A");
        $this->assertEquals("A", $this->productMock->getName());
    }

    public function testfetchProductPrice() {
        $this->productMock->expects($this->any())
        ->method('getUnitPrice')
        ->willReturn(10.0);
        $this->assertEquals(10, $this->productMock->getUnitPrice());
    }

    public function testfetchProductSpecialPrice() {
        $specialPrice = array(
            "quantity" => 3,
            "specialPrice" => 35
        );
        $this->productMock->expects($this->any())
        ->method('getSpecialPrice')
        ->willReturn($specialPrice);
        $this->assertEquals($specialPrice, $this->productMock->getSpecialPrice());
    }
}
?>