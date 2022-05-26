<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cardno = $_POST['cardno'];
    $pincode = $_POST['pincode'];
    $cvv = $_POST['cvv'];
    $con = new mysqli('localhost','root','','users');
    if($con->connect_error)
    {
        die('Connection Failed : '.$con->connect_error);
    }else
    {
        $stmt = $con->prepare("INSERT into `details`(`name`, `password`, `email`, `cardno`,`pincode`,`cvv`) VALUES('$name', '$password', '$email' ,'$cardno','$pincode','$cvv')");
        $stmt->execute();
        echo"Registered Successfully";
        echo "<a href='homepage.php'>Click Here</a>to get redirected to homepage";
        $stmt->close();
        $con->close();
        
    }

?>