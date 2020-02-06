<?php
include 'additions/database.php';
include 'additions/product.php';
include 'additions/header.php';
include 'additions/productDB.php';
include 'additions/productView.php';
include 'additions/dbDelete.php';
include 'additions/submit.php';
?>

<script>
    document.getElementById('index').setAttribute("class", "currentPage");
</script>

<h3>Product list:</h3>

<form method="POST">
<table>
    <tr>
        <th>
            <input type="checkbox" name="selectAll" id="selectAll" onclick="">
            Select All
        </th>
        <th>ID</th>
        <th>SKU</th>
        <th>Name</th>
        <th>Price</th>
        <th>Type</th>
        <th>Value</th>
        </tr>
    <?php                
         $products = new productView();
         $products->outputProducts();       
    ?>
    </table>
    <button type="sumbit" name="submit" class="btn btn-outline-secondary">Delete selected</button>
    
    </form> <!-- form -->
    <br>

<script>
    //Checkbox behavior
    $("#selectAll").click(function(){
        var x=document.getElementById("selectAll").checked;
        $("input[type=checkbox]:not(:first)").each(function(){
            if(x == true) {
            this.checked = true;
            }
            else {
            this.checked = false;
            }
        })
    });

    //Mass select behaviour
    $(".selectOne").click(function(){
        var x=document.getElementById("selectAll").checked;
        if(x == true)
        {
            document.getElementById("selectAll").checked = false;
        }
    });
</script>
</div> <!-- wrap-->
</body>
</html>