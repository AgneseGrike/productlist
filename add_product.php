<?php
include_once 'additions/header.php';
?>
<script>
    document.getElementById('add').setAttribute("class", "currentPage");    
</script>

<div class="form-group outer-group">
    <form action="additions/addProduct.php" method="POST">   
        SKU: 
        <div class="form-group skuGroup" title="First half of the SKU will be auto generated, please enter unique characters for the other half">
            <input type="text" name="sku1" placeholder="__" class="form-control sku" readonly>
            <span class="middle">-</span>
            <input type="text" name="sku2" placeholder="00" class="form-control sku" maxlength="2"><br>
        </div>
        Name: <input type="text" name="name" placeholder="Name" class="form-control"><br>
        Price: <input type="number" name="price" step="any" placeholder="00.00" class="form-control"><br>

        <div class="form-group inner-group">
            Product type:<br>
                <span class="typeWrap"><input type="radio" name="type" value="1" id="dvd" onchange="unitCast()">DVD-disc</span>
                <span class="typeWrap"><input type="radio" name="type" value="2" id="book" onchange="unitCast()">Book</span>
                <span class="typeWrap"><input type="radio" name="type" value="3" id="furniture" onchange="unitCast()">Furniture</span><br>

            <div title="Choose product type" id="tooltip">
                Attribute:
                <input type="text" name="attribute" placeholder="" class="form-control" id="attribute" pattern="">
            </div> 
        </div> <!-- inner-group -->

        <button type="submit" name="submit" class="btn btn-outline-secondary">Add product</button>
    </form>

    <?php
        // Error throwing
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl, "signup=empty") == true)
        {
            echo "<p class='error'>All fields are required!</p>";
            exit();
        }

        if(strpos($fullUrl, "signup=error") == true)
        {
            echo "<p class='error'>idk</p>";
            exit();
        }

        if(strpos($fullUrl, "signup=SKUerror") == true)
        {
            echo "<p class='error'>SKU must be unique!</p>";
            exit();
        }

        if(strpos($fullUrl, "signup=success") == true)
        {
            echo "<p class='success'>Product has been added!</p>";
            exit();
        }        
    ?>
</div> <!-- outer-group -->
</div> <!-- wrap -->
</body>

</html>