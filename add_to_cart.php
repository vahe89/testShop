<?php
    include('data.php');

    if ($_POST['action'] == 'add') {

        addToCart($_POST['code']);

        $total = 0;
        foreach ($_SESSION['cart'] as $key => $value){
            $total += $value['count'] * $value['price'] - floor($value['count']/2) * $value['price']/2;
        }

        if ($total < 50){
            $delivery = 4.95;
        }elseif($total > 50 && $total < 90){
            $delivery = 2.95;
        }elseif($total >= 90){
            $delivery = 0;
        }

        $total = $total + $delivery;
        $_SESSION['total'] = $total;

    }else{
        session_unset();
    }

