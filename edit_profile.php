<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];

$btn = isset($_POST['edit']);
$new_username = $_POST['username'];
$new_email = $_POST['email'];
$new_password = $_POST['password'];
$new_confirm_password = $_POST['confirm_password'];

        

        if($btn == true){

            if(($new_username == "" || $new_email == "") || ($new_password == "" || $new_confirm_password == "")){
                echo "<script>alert('Please insert all information');";
                echo "window.location.href='profile.php';</script>";
            }

            else{
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $results = mysqli_query($conn, $sql);

                if(mysqli_num_rows($results) > 0){
                    while($row = mysqli_fetch_array($results)){
                        $db_username = $row['username'];
                        $db_email = $row['email'];

                        if($new_username == $db_username){
                            echo "<script>alert('Username has been taken');";
                            echo "window.location.href='profile.php';";
                            break;
                        }
                        elseif($new_email == $db_email){
                            echo "<script>alert('Email has been taken');";
                            echo "window.location.href='profile.php';</script>";
                            break;
                        }
                        else{
                            $query2 = "UPDATE user SET username = '$new_username', email = '$new_email', password = '$new_password', confirm_password = '$new_confirm_password' WHERE username = '$username'";
                            $results2 = mysqli_query($conn, $query2);

                            $query3 = "UPDATE tutorial SET username = '$new_username' WHERE username = '$username'";
                            $results3 = mysqli_query($conn, $query3);

                            echo "<script>alert('Profile updated');";
                            session_destroy();
                            echo "window.location.href='index.php';</script>";
                        }
                    }
                }
            
        }

    }
        
?>