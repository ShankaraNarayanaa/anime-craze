<?php
    include('login_connection.php');
    $name = $_POST["name"];
    $pass = $_POST["password"];
    $query = "SELECT * FROM details WHERE name = '$name' AND password = '$pass'";
    $result = mysqli_query($con,$query);
    if(mysqli_fetch_assoc($result))
    {
	session_start();
        $_SESSION['user'] = $name;
        header("location:homepage.php");
        echo('You are logged in');
    }
    else
    {
        echo'Not works';
    }
?>