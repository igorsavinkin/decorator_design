<?php
// Price of black coffee is 2 eur. 
// Price of a portion of the milk is 50 cents. 
// Please calculate the price of a coffee with milk using pattern decorator. 
// Answer in code would work best.

// importing all the classes including basic Decorator class
include 'autoloader.php'; 

/* 
 * Клиентский код работает со всеми объектами, используя интерфейс Product.
 * Таким образом, он остаётся независимым от конкретных классов компонентов, с
 * которыми работает.
 */
function count_cost(Product $product1, Product $product2)
{
    return $product1->getPrice() + $product2->getPrice();
}

echo '<h3>Decorator pattern example.</h3>'; 
$product = new ConcreteProduct;

$milk = new Milk($product); // we decorate the product instance with Milk class decorator
echo "We've got a decorated ",  $milk->getName();
echo '<br />', $milk->get_Type();
echo "</br></br>";

$coffee = new Coffee($product);
echo "We've got a decorated ", $coffee->getName();
echo '<br />', $coffee->get_Type();
echo "</br></br>";

echo 'Sum cost of milk and coffee: ', count_cost($milk, $coffee);
?>