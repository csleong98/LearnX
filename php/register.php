<?php 

    $conn = mysqli_connect("boleh.tv", "boleh", "TWSB2018", "boleh_LearnX");

    if(mysqli_connect_errno()) {
        echo '<script>';
        echo 'alert("No Connection")';
        echo '</script>';
    }

    else {
        echo '<script>';
        echo 'alert("Connected")';
        echo '</script>';    }

    $username = mysqli_escape_string($_POST['username']);
    $fullname = mysqli_escape_string($_POST['fullname']);
    $email = mysqli_escape_string($_POST['email']);
    $password = mysqli_escape_string($_POST['password']);
    $confirm_password = mysqli_escape_string($_POST['confirm-password']);
    
    
    

?>