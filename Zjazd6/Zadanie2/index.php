<?php

class Product {
    private $name;
    private $price;
    private $quantity;
    public function __construct(string $name, float $price, int $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getPrice(): float {
        return $this->price;
    }
    public function getQuantity(): int {
        return $this->quantity;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setPrice(float $price) {
        $this->price = $price;
    }
    public function setQuantity(int $quantity) {
        $this->quantity = $quantity;
    }
    public function __toString(): string {
        return "Product: $this->name, Price: $this->price, Quantity: $this->quantity";
    }
}

class Cart {
    private $products;
    public function __construct() {
        $this->products = [];
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
    public function removeProduct(Product $product) {
        foreach ($this->products as $key => $prod) {
            if ($prod === $product) {
                unset($this->products[$key]);
                break;
            }
        }
        $this->products = array_values($this->products);
    }
    public function getTotal(): float {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
    }
    public function __toString(): string {
        $output = "Products in cart:<br>";
        foreach ($this->products as $product) {
            $output .= $product . "<br>";
        }
        $output .= "Total price: " . $this->getTotal();
        return $output;
    }
}
/*
                Test
$product1 = new Product("Laptop", 8000.0, 1);
$product2 = new Product("Phone", 1499.99, 2);
$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
echo $cart;
$cart->removeProduct($product1);
echo "<br><br>";
echo $cart;*/
?>
