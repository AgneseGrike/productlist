<?php
include 'product.php';
include 'database.php';
include 'dbInsert.php';

if(isset($_POST["submit"])) {
    $product = new dbInsert();
    $product->insertProduct($_POST['sku2'], $_POST['name'], $_POST['price'], $_POST['type'], $_POST['value']);
}

