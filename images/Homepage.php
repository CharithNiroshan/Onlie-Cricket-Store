<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Homepage.css">
</head>                
<body>
    <div class="wrapper">
        <?php
            include "Header.html";
        ?>
        <div class="productsdetails">
            <h1>Our Products</h1>
            <div class="products">
                <div class="product">
                    <img src="images/bat.jpeg" alt="">
                </div>
                <div class="product">
                    <img src="images/ball.jpeg" alt="">
                </div>
                <div class="product">
                    <img src="images/pad.jpeg" alt="">
                </div>
                <div class="product">
                    <img src="images/glows.jpeg" alt="">
                </div>
                <div class="product">
                    <img src="images/helmet.jpeg" alt="">
                </div>
                <div class="product">
                    <img src="images/shoes.jpeg" alt="">
                </div>
            </div> 
        </div>
        <div class="aboutus">
            <h1>About us</h1>
            <div class="aboutusdetails">
                <p>
                    Browse the very best choice of cricket equipment online at Rio Online Cricket Store – a shop for cricketers by cricketers. Shop spectacular new ranges today, including stunning 2020 cricket bats and cricket gear. Worldwide delivery. 100% safe & secure shopping. 24 years online. 
                </p>
                <div class="container">
                    <h2>&#10004; Safe and Secure Shopping</h2>
                    <h2>&#10004; Islandwide Delivery</h2>
                    <h2>&#10004; Legendary Brands</h2>
                    <h2>&#10004; Unrivalled Selection</h2>
                </div>
            </div>
        </div>
        <div class="brands">
            <h1>Shop by Brands</h1>
            <div class="brandcontainer">
                    <div class="brand" id="brand1">
                            <h2>Gray-Nicholls</h2>
                            <p>
                                A full list of all Gray-Nicolls cricket bats available this year from Gray-Nicolls. We pride ourselves on our tradition and our innovation, allowing us to produce the best cricket bats in the world. If you can't find what you are looking for or have a question, get in touch with us!
                            </p>
                    </div>
                    <div class="brand" id="brand2">
                            <h2>Gunn & Moore</h2>
                            <p>
                                Gunn & Moore make the finest cricket bats in the World. Pick up a GM cricket bat and you will instantly know from the balance, finish and ultra high quality presentation that this is English Design and Craftsmanship at its very finest.
                            </p>
                    </div>
                    <div class="brand" id="brand3">
                            <h2>SS</h2>
                            <p>
                                As our SS Brand Cricket Equipments are known as a name of Quality goods are used by the international cricket players like Saurav Ganguly, Virender Sehwag, Sachin Tendulkar, V.V.S Laxman, Roger Binny, Manoj Prabhakar, and many other test cricketers S. Ramesh, Yuvraj Singh, Akash Chopra, and Deep Das Gupta.
                            </p>
                    </div>
                    <div class="brand" id="brand4">
                            <h2>Kookaburra</h2>
                            <p>
                                Kookaburra, named after the company founder AG Thompson’s pet Kookaburra ‘Jacky’, a member of the Australian Kingfisher family, is an Australian sports equipment company, specialising in cricket and field hockey equipment (including balls). The company notably manufactures the most widely used brand of ball used in Test Cricket, limited over cricket, and international hockey tournaments.
                            </p>
                    </div>
                    <div class="brand" id="brand5">

                    </div>
            </div>
        </div>
        <?php
            include "Footer.html";
        ?>
    </div>
    <div class="loginform" id="login">
        <form action="_login.php" method="get" id="form" >
            <h1>Log in</h1>
            <label for="username" >Username</label><br><br>
            <input type="text" name="username" id="username"><br><br>
            <label for="password">Password</label><br><br>
            <input type="password" name="password" id="password"><br><br>
            <button type="submit" name="submit" value="submit">Submit</button><br>
            <br><h3 id="notmember">Not a Member yet?<a id="notamember">Sign Up</a></h3>
        </form>
    </div>
    <div class="signupform" id="signup">
        <form action="_signup.php" method="get" id="form" >
            <h1>Sign Up</h1>
            <label for="name" >Name</label><br>
            <input type="text" name="name" id="username"><br>
            <label for="username" >Username</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <label for="repassword">Re Type Password</label><br>
            <input type="password" name="repassword" id="repassword"><br>
            <label for="role">Role</label><br>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br>
            <button type="submit" name="submit" value="submit">Submit</button><br>
            <br><h3 id="notmember">Already a Member?<a id="member">Log In</a></h3>
        </form>
        <a href=""></a>
    </div>
    <?php
        if(isset($_REQUEST['er']))
        {
            echo "<div class='message' id='message' style='visibility:visible;'>
                            <div class='messagecontainer'>";
                                    if($_REQUEST['er']==1)
                                    {
                                        echo "<h1 style='background-color: red;'>Error</h1>";
                                        echo "<p>".$_REQUEST['message']."</p>";
                                        echo "<a href='Homepage.php' id='ok'><button>OK</button></a>";
                                    }
                                    else
                                    {
                                        echo "<h1 style='background-color: rgb(247, 247, 162);'>Success</h1>";
                                        echo "<p>".$_REQUEST['message']."</p>";
                                        echo "<a href='Sellerpage.php' id='ok'><button>OK</button></a>";
                                    }
            echo "
            </div>
        </div>";      
        }
    ?>
    <script src="js/Homepage.js"></script>
</body>
</html>