<?php
//print_r($_POST);
if ( isset($_POST['submit'])) {
    $name = $_POST['name'];
    $discription = $_POST['dis'];
    $price = $_POST['price'];

    $errors = [];
    // validating product name
    if ( empty($name)) {
        $errors[] = 'product name is required';
    } elseif ( ! is_string($name)) {
        $errors[] = 'product name must be string';
    } elseif (strlen($name) < 5 or strlen($name) > 255) {
        $errors[] = 'product name must be between 5 to 255 chars';
    }


    // validating product discription
    if ( empty($discription)) {
        $discription = 'no description';
    } elseif ( ! is_string($name)) {
        $errors[] = 'product discription must be string';
    } 


    // validating product price
    if ( empty($price)) {
        $errors[] = 'product price is required';
    } elseif ( ! is_numeric($price)) {
        $errors[] = 'product price must be a number';
    } elseif ($price < 0) {
        $errors[] = 'product price must be at least 0';
    }

    if (count($errors)) {
        print_r($errors);
    } else {
        echo " the data is :- <br> ===>  prudect name: $name <br> ===> and the price is: $price <br> ===> and the discription is: $discription";

    }


}

?>
<br><br>
<a href="add-product.html"> return to add product page </a>