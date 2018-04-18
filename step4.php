<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];
$step4 = isset($_POST['step4_checkbox']);

if ($step4 == true){
    
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '', '', '$step4');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 4 Completed');";
        echo "window.location.href='tutorial_4.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step4 = '$step4' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 4 Completed set');";
        echo "window.location.href='tutorial_4.php';</script>";
    }

}
else{
    $step4 = 0;
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '', '', '$step4');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_4.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step4 = '$step4' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_4.php';</script>";
    }
}
?>