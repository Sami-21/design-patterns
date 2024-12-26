<?php

/**
 * The example class that has cloning ability. We'll see how the values of field
 * with different types will be cloned.
 */
class Product
{
    public  string $name;
    public  string $description;
    public  float $price;
    public  string $sellerName;

    /**
     * PHP has built-in cloning support. You can `clone` an object without
     * defining any special methods as long as it has fields of name types.
     * Fields containing objects retain their references in a cloned object.
     * Therefore, in some cases, you might want to clone those referenced
     * objects as well. You can do this in a special `__clone()` method.
     */
    public function __clone()
    {
        $this->name = clone $this->name;
        $this->description = clone $this->description;
        $this->price = clone $this->price;
        $this->sellerName = clone $this->sellerName;
    }

    public function __construct(string $name, string $description, float $price, string $sellerName)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->sellerName = $sellerName;
    }
}

function clientCode()
{
    $product1 = new Product('PS5', 'Sony Playstation 5', 499.99, 'Sony');
    echo "fuck";
    $product2 = clone $product1;
    if ($product1->name === $product2->name) {
        echo "Name values have been carried over to a clone!\n";
    } else {
        echo "Name values have not been copied!\n";
    }
    if ($product1->description === $product2->description) {
        echo "Description has been cloned!\n";
    } else {
        echo "Description has not been cloned!\n";
    }

    if ($product1->price === $product2->price) {
        echo "Price has been cloned!\n";
    } else {
        echo "Price has not been cloned!\n";
    }

    if ($product1->sellerName === $product2->sellerName) {
        echo "Seller has  been cloned!\n";
    } else {
        echo "Seller has not been cloned!\n";
    }
}

clientCode();
