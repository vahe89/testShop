<?php
session_start();
$products = [
    'R01' => ['product' => 'Red Widget', 'code' => 'R01', 'price' => 32.95],
    'G01' => ['product' => 'Green Widget', 'code' => 'G01', 'price' => 24.95],
    'B01' => ['product' => 'Blue Widget', 'code' => 'B01', 'price' => 7.95],
];

function addToCart ($code) {
    global $products;

    $prod_str = $_SESSION['products'] ? $_SESSION['products'] : '';
    $_SESSION['products'] = ltrim($prod_str . ', ' . $code,', ');

    $cart = $_SESSION['cart'] ? $_SESSION['cart'] : [];
    if (!array_key_exists($code,$cart)){
        $cart[$code] = ['count' => 1, 'price' => $products[$code]['price']];
    }else{
        $cart[$code]['count'] += 1;
    }
    $_SESSION['cart'] = $cart;
}
