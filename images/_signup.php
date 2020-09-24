<?php
    $name=$_REQUEST['name'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $role=$_REQUEST['role'];

    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=online_cricket_store","root", "");

        $sql="INSERT INTO User (name,username,password,role,profilepicture) VALUES ('$username','$name','$password','$role','')";
        
        echo $sql;
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()==1)
        {
            header("location:Homepage.php?er=0&message=Succesfully Registered.");
            // if($role=='admin')
            // {
            //     header("location:Adminpage.php");
            // }
            // else 
            // {
            //     header("location:Userpage.php");
            // }
        }
        else
        {
            header("location:Homepage.php?er=1&message=Error.");
        }

        echo $stmt->rowCount();
    }
    catch(PDOException $err) {
        echo "ERROR: Unable to connect: " . $err->getMessage();
    }
?>