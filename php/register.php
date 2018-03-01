<?php 

    if(isset($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])){
        $fullname = mysqli_escape_string($_POST['fullname']);
        $username = mysqli_escape_string($_POST['username']);
        $password = mysqli_escape_string($_POST['password']);
        $confirm_password = mysqli_escape_string($_POST['confirm-password']);
     
        if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
            
        }
    }

?>