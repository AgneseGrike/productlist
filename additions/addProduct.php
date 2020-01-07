<?php

if(isset($_POST["submit"])) {
    include_once 'dbConn.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $value = mysqli_real_escape_string($conn, $_POST['attribute']);
    $sku1 = "";

    switch ($type[0]) {
        case 1:
            $sku1 = "D";
            break;
        case 2:
            $sku1 = "B";
            break;
        case 3:
            $sku1 = "F";
            break;
    }
    $sku3 = $sku1.$name[0]."-".mysqli_real_escape_string($conn, $_POST['sku2']);

    $sql = "SELECT * from products where SKU='$sku3'";
    $result = mysqli_query($conn, $sql);    
    $resultCheck = mysqli_num_rows($result);

    if(empty($sku3) || empty($name) || empty($price) || empty($type) || empty($value)) {
        header("Location: ../add_product.php?signup=empty");
    }

    elseif($resultCheck != 0) {
        header("Location: ../add_product.php?signup=SKUerror");
    }

    else {
        $sql = "insert into products (SKU, name, price, attrib, value) values ('$sku3', '$name', '$price', '$type', '$value');";
    
        mysqli_query($conn, $sql);
        header("Location: ../add_product.php?signup=success");        
    } 
}

