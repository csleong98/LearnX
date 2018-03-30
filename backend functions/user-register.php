<?php

include ('../php/connection.php');

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = md5(rand(1000, 5000));
$hash = md5(rand(0, 1000));

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "<script>alert('Invalid email');";
//     die("window.history.go(-1);</script>");	
// }

if (isset($fullname)) {
    $sql = "SELECT * FROM user WHERE realname='$fullname'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {

        echo "<script>alert('Taken');";
        echo "</script>";

    }else{
        echo "<script>alert('Not Taken');";
        echo "</script>";
    }
    exit();
}
// $sql = "INSERT INTO user(username, realname, email, password, hash) "."VALUES('$username', '$fullname', '$email', '$password', '$hash');"; 
// mysqli_query($conn, $sql);

// if (mysqli_affected_rows($conn)<=0) {
//     echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
//     die("window.history.go(-1);</script>");			
// }

// echo "<script>alert('Register Successfully! Please login now!');";
// echo "</script>";

?>