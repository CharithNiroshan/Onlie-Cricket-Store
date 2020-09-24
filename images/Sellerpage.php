<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Sellerpage.css">
</head>                
<body>
    <div class="wrapper">
        <?php
            include "Header.html";
        ?>
        <div class="selleractions">
            <div class="actions">
                    <div class="image" id="add">
                        <img src="images/add.png" alt="" width="40px" height="40px">
                    </div>
                <h1>Add New Product</h1>
            </div>
            <div class="actions">
                    <div class="image" id="edit">
                        <img src="images/edit-icon-png-3602.png" alt="" width="35px" height="35px">
                    </div>
                <h1>Edit Product</h1>
            </div>
            <div class="actions">
                    <div class="image" id="delete">
                        <img src="images/pngfuel.com.png" alt="" width="35px" height="35px">
                    </div>
                <h1>Delete Product</h1>
            </div>
        </div>
        <div class="addproduct">
            <form action="_seller.php" method="get" id="form" >
                <h1>Add Product</h1>
                <label for="ptype" >Select Product Type</label><br>
                <select name="ptype" id="ptype">
                    <option value="bats">Bats</option>
                    <option value="ball">Balls</option>
                    <option value="glows">Gloves</option>
                    <option value="pads">Pads</option>
                    <option value="helmets">Helmets</option>
                    <option value="shoes">Shoes</option>
                </select><br>
                <label for="description" >Description</label><br>
                <input type="text" name="description" id="description"><br>
                <label for="qty" >Quantity</label><br>
                <input type="number" name="qty" id="qty"><br>
                <label for="price">Price</label><br>
                <input type="password" name="price" id="price"><br>
                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
        include "Footer.html";
        if(isset($_REQUEST['er']))
        {
            echo "<div class='message' id='message' style='display:flex;'>
                            <div class='messagecontainer'>";
                                    if($_REQUEST['er']==1)
                                    {
                                        echo "<h1 style='background-color: red;'>Error</h1>";
                                        echo "<p>Error</p>";
                                    }
                                    else
                                    {
                                        echo "<h1 style='background-color: rgb(247, 247, 162);'>Success</h1>";
                                        echo "<p>Succesfull</p>";
                                    }
            echo "<button>OK</button>
            </div>
        </div>";      
        }
    ?>
    <script src="js/Sellerapage.js"></script>
</body>
</html>