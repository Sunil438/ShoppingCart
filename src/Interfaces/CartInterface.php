<?php

namespace ShoppingCart\Interfaces;

interface CartInterface {
    public function addProduct(ProductInterface $product);
    public function countCartItems();
    public function getTotalPrice();
}
?>