<?php 
namespace ShoppingCart;
use ShoppingCart\Cart;
use ShoppingCart\Interfaces\ProductInterface;

class SuperMarket extends Cart {

    public function scan(ProductInterface $product) {
        $this->addProduct($product);
    }

}

?>