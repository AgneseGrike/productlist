<?php
include_once 'additions/dbConn.php';  

include_once 'additions/header.php';
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
        $sql = "SELECT products.ID_SKU, products.SKU, products.name, products.price, attributes.type, products.value from products inner JOIN attributes on products.attrib = attributes.ID_attribute;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {                    
            while ($row = mysqli_fetch_assoc($result)) {
                $checkboxName=$row['ID_SKU'];
                echo "<tr><td><input type='checkbox' class='selectOne' name='selectOne[]' value='$checkboxName'</td>
                    <td>" . $row['ID_SKU'] . "</td><td>" .$row['SKU'] . "</td><td>" .$row['name'] . "</td><td>" . $row['price'] . " €</td><td>" . $row['type'] . "</td><td>" . $row['value'] . "</td></tr>"; 
            }            
        }        
    ?>
    </table>
    <button type="sumbit" name="submit" class="btn btn-outline-secondary">Delete selected</button>
    
    </form> <!-- form -->
    <br>

    <?php 
    if(isset($_POST["submit"]))
        {            
            if(isset($_POST["selectAll"]))
            {   
                mysqli_query($conn,"truncate table products");
                header("Refresh:0");
            }
            else {      
                $checkedProducts = $_POST['selectOne'];                
                while (list ($key, $val) = @each ($checkedProducts))
                {
                    mysqli_query($conn,"delete from products where ID_SKU=$val");
                }
                header("Refresh:0");
            }
        }
    ?>

<script>
    // Checkbox behavior

    //Delete selected
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

    //Select all
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