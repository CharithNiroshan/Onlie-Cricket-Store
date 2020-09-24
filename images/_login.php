<?php
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=online_cricket_store","root", "");

        $sql="SELECT * FROM User WHERE username='$username' AND password='$password'";
        $stmt=$conn->prepare($sql);
        // $stmt->bindParam(':un',$username);
        // $stmt->bindParam(':pw',$password);
        $stmt->execute();

        echo $sql;
        
        //Adslash and removeslashes
        if($stmt->rowCount()==1)
        {
            header("location:Homepage.php?er=0&message=Succesfully Login.");
        }
        else
        {
            header("location:Homepage.php?er=1&message=Username and Password Not Valid.");
        }
        $conn = null;
    }
    catch(PDOException $err) {
        echo "ERROR: Unable to connect: " . $err->getMessage();
    }
?>