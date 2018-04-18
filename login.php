<?php

session_start();

include('connection.php');

        $username = $_POST['login_username'];
        $password = $_POST['login_password'];

        $query = "SELECT * from user WHERE username = '".$username."' AND password = '".$password."'"; 
        $results = mysqli_query($conn, $query);

    if(mysqli_num_rows($results)>=0){

        $query2 = "SELECT * from user WHERE username = '".$username."' AND password = '".$password."'"; 
        $results2 = mysqli_query($conn, $query2);

        if(mysqli_num_rows($results2)<=0){
            echo "<script>alert('Wrong username or password');";
            die("window.history.go(-1);</script>");
            
        }
        else {
            echo "<script>alert('Welcome back! ".$_POST['login_username']."');";
            $_SESSION['login_username'] = $username;
            echo "window.location.href='user_homepage.php';</script>";
            exit();
        }
        
    }

?>

