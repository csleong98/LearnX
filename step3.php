<?php 
session_start();

include('connection.php');

$username = $_SESSION['login_username'];
$step3 = isset($_POST['step3_checkbox']);

if ($step3 == true){
    
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '', '$step3', '');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 3 Completed');";
        echo "window.location.href='tutorial_3.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step3 = '$step3' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Step 3 Completed set');";
        echo "window.location.href='tutorial_3.php';</script>";
    }

}
else{
    $step3 = 0;
    $sql = "SELECT * FROM tutorial WHERE username = '$username'";
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) <= 0) {

        $query = "INSERT INTO tutorial(username, step1, step2, step3, step4) "."VALUES('$username', '', '', '$step3', '');";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_3.php';</script>";
    }   
    else {
        $query = "UPDATE tutorial SET step3 = '$step3' WHERE username = '$username'";
        $results = mysqli_query($conn, $query);
        echo "<script>alert('Not done is recorded to the database');";
        echo "window.location.href='tutorial_3.php';</script>";
    }
}
?>