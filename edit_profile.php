<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];

$btn = isset($_POST['edit']);
$btn_delete = isset($_POST['delete']);
$new_fullname = $_POST['fullname'];
$new_password = $_POST['password'];

        

        if($btn == true){

            if($new_fullname == "" || $new_password == ""){
                echo "<script>alert('Please insert all information');";
                echo "window.location.href='profile.php';</script>";
            }

            else{
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $results = mysqli_query($conn, $sql);

                if(mysqli_num_rows($results) > 0){
                        
                            $query2 = "UPDATE user SET realname = '$new_fullname', password = '$new_password' WHERE username = '$username'";
                            $results2 = mysqli_query($conn, $query2);

                            echo "<script>alert('Profile updated');";
                            session_destroy();
                            echo "window.location.href='index.php';</script>";
                        }
                    }
                }

                if($btn_delete == true){

                    echo "<script>onclick=\"return confirm('Are you sure you want to delete your account?');\"</script>";

                    $sql2 = "SELECT * FROM user WHERE username = '$username'";
                    $results3 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($results3) > 0){
                        
                            $query3 = "DELETE FROM user WHERE username = '$username'";
                            $results4 = mysqli_query($conn, $query3);

                            $query4 = "DELETE FROM tutorial WHERE username = '$username'";
                            $results5 = mysqli_query($conn, $query4);
                            
                            echo "<script>alert('Profile Deleted');";
                            session_destroy();
                            echo "window.location.href='index.php';</script>";
                        }
                }
            
        
?>