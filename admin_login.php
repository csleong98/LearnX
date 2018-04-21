<?php 

session_start();

include('connection.php');

        $name = $_POST['admin_username'];
        $password = $_POST['admin_password'];

        $query = "SELECT * from admin WHERE name = '".$name."' AND password = '".$password."'"; 
        $results = mysqli_query($conn, $query);

    if(mysqli_num_rows($results)>=0){

        $query2 = "SELECT * from admin WHERE name = '".$name."' AND password = '".$password."'"; 
        $results2 = mysqli_query($conn, $query2);

        if(mysqli_num_rows($results2)<=0){
            echo "<script>alert('Wrong username or password');";
            die("window.history.go(-1);</script>");
            
        }
        else {
            echo "<script>alert('Welcome back! ".$_POST['admin_username']."');";
            $_SESSION['admin_username'] = $name;
            echo "window.location.href='admin_page.php';</script>";
            exit();
        }
        
    }


?>