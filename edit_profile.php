<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];

$btn = isset($_POST['edit']);
$new_username = $_POST['username'];
$new_email = $_POST['email'];
$new_password = $_POST['password'];
$new_confirm_password = $_POST['confirm_password'];

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $results = mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) >= 0){
            while($row = mysqli_fetch_array($results)){
                $edit_username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
                $confirm_password = $row['confirm_password'];
            }
        }

        if($btn == true){

            if($new_username == ""){
                $new_username == $edit_username;
            }
            elseif($new_email == "") {
                $new_email == $email;
            }
            elseif($new_password == ""){
                $new_password == $password;
            }
            elseif($new_confirm_password == ""){
                $new_confirm_password == $confirm_password;
            }

            if(mysqli_num_rows($results) > 0){

                $query2 = "UPDATE user SET username = '$new_username', email = '$new_email', password = '$new_password', confirm_password = '$new_confirm_password' WHERE username = '$username'";
                $results2 = mysqli_query($conn, $query2);

                $query3 = "UPDATE tutorial SET username = '$new_username' WHERE username = '$username'";
                $results3 = mysqli_query($conn, $query3);

                echo "<script>alert('Profile updated');";
                session_destroy();
                echo "window.location.href='index.php';</script>";

            }
            else{
                echo "<script>alert('There is no record of this user');</script>";
            }

        }
        
        ?>