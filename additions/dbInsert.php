<?php

class dbInsert extends database {

    function insertProduct($s2, $n, $p, $t, $v) {
        $name = $this->connect()->escape_string($n);
        $price = $this->connect()->escape_string($p);
        $type = $this->connect()->escape_string($t);
        $value = $this->connect()->escape_string($v);
        $sku = $name[0] . $type[0] . "-" . $this->connect()->escape_string($s2);

        switch ($type) {
            case "DVD":         
                $product = new DVD($sku, $name, $price, $value);
                $product->setType();
                break;
            case "Book":    
                $product = new Book($sku, $name, $price, $value);
                $product->setType();
                break;
            case "Furniture":        
                $product = new Furniture($sku, $name, $price, $value);
                $product->setType();
                break;
            }


        //checks if SKU is unique
        $sql = "SELECT * from product where SKU='$sku'";
        $result = $this->connect()->query($sql);    
        $resultCheck = mysqli_num_rows($result);    

        if(empty($name) || empty($price) || empty($type) || empty($sku) || empty($value)) {
            header("Location: ../add_product.php?signup=empty");
        }
        elseif($resultCheck != 0) {
            header("Location: ../add_product.php?signup=SKUerror");        
        }
        else {
            $sql = "insert into product (SKU, name, price, type, value) values ('$sku', '$name', '$price', '$type', '$value');";
            $this->connect()->query($sql); 
            header("Location: ../add_product.php?signup=success");        
        }       
    }
}

