<?php

namespace ShoppingCart;
use ShoppingCart\Interfaces\CartInterface;
use ShoppingCart\Interfaces\ProductInterface;

class Cart implements CartInterface {
    private $items = [];
    public function addProduct(ProductInterface $product) {
        $this->items[] = $product;
    }
    public function countCartItems() {
        return count($this->items);
    }
    public function getTotalPrice() {
        $groupedProducts = $this->groupProducts();

        $totalPrice = 0;
        foreach($groupedProducts as $eachProduct) {
            $splPriceArray = $eachProduct[0]->getSpecialPrice(); 
            if(!empty($splPriceArray)) {
                if(count($eachProduct) == $splPriceArray['specialPrice']) {
                    $totalPrice += $splPriceArray['specialPrice'];
                } else {
                    $totalPrice = count($eachProduct) * $eachProduct[0]->getUnitPrice();
                }
            } else {
                $totalPrice += $eachProduct[0]->getUnitPrice();
            }
        }
        return $totalPrice;
    }

    private function groupProducts() {
        $groupedProducts = [];

        foreach($this->items as $item) {
            
            $groupedProducts[$item->getName()][] = $item;
        }
        return $groupedProducts;
        
    }

}

?>