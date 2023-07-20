<?php 
error_reporting(E_ERROR);
use ShoppingCart\Product;
use ShoppingCart\SuperMarket;

require('vendor/autoload.php');

$specialPrice = array(
    "quantity" => 3,
    "specialPrice" => 35
);

$product1 = new Product("A", 10, []);
$product2 = new Product("B", 10, []);

$product3 = new Product("B", 100, []);

$supertmarketobj = new SuperMarket();

//Scanning the products
$supertmarketobj->scan($product1);
$supertmarketobj->scan($product2);

$supertmarketobj->scan($product3);

echo "TotalPrice: ".$supertmarketobj->getTotalPrice();

//var_dump($product1->getSpecialPrice());

?>