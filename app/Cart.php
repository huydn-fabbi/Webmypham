<?php
namespace App;

class Cart {
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanity = 0;

    public function __construct($cart) {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanity = $cart->totalQuanity;
        }
    }

    public function addCart($product, $id) {
        if ($product->promotion_id != null) {
            $price = $product->price - (($product->price * $product->promotion->discount) / 100);
        } else {
            $price = $product->price;
        }
        $product->price = $price;
        $newProduct = [
            'quantity' =>0,
            'price' => $price,
            'productInfo' => $product
        ];

        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }

        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $price;
        $this->totalQuanity++;
    }

    public function deleteCart($id) {
        $this->totalQuanity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function updateCart($id, $quantity)
    {
        $this->totalQuanity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;

        $this->totalQuanity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];
    }
}
?>