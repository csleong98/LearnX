<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];
$step2 = isset($_POST['step2_checkbox']);

if ($step2 == true){
    
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '$step2', '', '');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 2 Completed ".$username."');";
        echo "window.location.href='tutorial_2.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step2 = '$step2' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 2 Completed set ".$username."');";
        echo "window.location.href='tutorial_2.php';</script>";
    }

}
else{
    $step2 = 0;
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '$step2', '', '');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_2.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step2 = '$step2' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_2.php';</script>";
    }
}
?>