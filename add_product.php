<?php
include 'additions/header.php';
include 'additions/product.php';
include 'additions/submit.php';
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
                <span class="typeWrap"><input type="radio" name="type" value="DVD" id="dvd" onchange="unitCast()">DVD-disc</span>
                <span class="typeWrap"><input type="radio" name="type" value="Book" id="book" onchange="unitCast()">Book</span>
                <span class="typeWrap"><input type="radio" name="type" value="Furniture" id="furniture" onchange="unitCast()">Furniture</span><br>

            <div title="Choose product type" id="tooltip">
                Value:
                <input type="text" name="value" placeholder="" class="form-control" id="value" pattern="">
            </div> 
        </div> <!-- inner-group -->

        <button type="submit" name="submit" class="btn btn-outline-secondary">Add product</button>
    </form>
</div> <!-- outer-group -->
</div> <!-- wrap -->
</body>

</html>