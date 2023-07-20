<?php 
namespace ShoppingCart\Interfaces;

interface ProductInterface {
 public function getName(): string;
 public function getUnitPrice(): float;
 public function getSpecialPrice(): Array;
}
?>