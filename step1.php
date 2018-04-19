<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];
$step1 = isset($_POST['step1_checkbox']);
$btn = isset($_POST['submit']);


if($btn == true){
    if ($step1 == true){
    
        $sql = "SELECT * FROM tutorial WHERE username = '$username'";
        $results = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($results) <= 0) {
    
            $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '$step1', '', '', '');";
            $results = mysqli_query($conn, $query);
            echo "<script>alert('Step 1 Completed ".$username."');";
            echo "window.location.href='tutorial_1.php';</script>";
        }   
        else {
            $query = "UPDATE tutorial SET step1 = '$step1' WHERE username = '$username'";
            $results = mysqli_query($conn, $query);
            echo "<script>alert('Step 1 Completed set ".$username."');";
            echo "window.location.href='tutorial_1.php';</script>";
        }
    
    }
    else{
        $step1 = 0;
        $sql = "SELECT * FROM tutorial WHERE username = '$username'";
        $results = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($results) <= 0) {
    
            $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '$step1', '', '', '');";
            $results = mysqli_query($conn, $query);
            echo "<script>alert('Not done is recorded to the database');";
            echo "window.location.href='tutorial_1.php';</script>";
        }   
        else {
            $query = "UPDATE tutorial SET step1 = '$step1' WHERE username = '$username'";
            $results = mysqli_query($conn, $query);
            echo "<script>alert('Not done is recorded to the databaset');";
            echo "window.location.href='tutorial_1.php';</script>";
        }
    }
} else {
    echo "<script>alert('Step 1 status is not submitted');</script>";
}

?>

