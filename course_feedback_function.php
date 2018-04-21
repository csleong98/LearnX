<?php

session_start();

include('connection.php');

$username = $_SESSION['login_username'];

date_default_timezone_set('Asia/Kuala_Lumpur');

$ui = $_POST['ui'];
$resources = $_POST['resources'];
$ux = $_POST['ux'];
$feedback = $_POST['feedback'];
$submit_date = date('Y-m-d');
$submit_time = date('g:i:s');

if(isset($_POST['course_feedback_submit']))
{
  if(($ui == "" || $resources == "") || ($ux == "" || $feedback == "")){
    echo "<script>alert('Please insert all required details');";
    echo "window.location.href='course_feedback.php';</script>"; 
  }
  elseif(($ui == "Rate here..." || $resources == "Rate here...") || ($ux == "Rate here...")){
    echo "<script>alert('Please rate all');";
    echo "window.location.href='course_feedback.php';</script>"; 
  }
  else{

    switch($ui){
      case "1":
        $ui = "Very clean and easy to use";
        break;

      case "2":
        $ui = "It was OK";
        break;
       
       case "3":
        $ui = "Very ugly and messy";
        break; 
    }

    switch($resources){
      case "1":
        $resources = "Very Informative";
        break;

      case "2":
        $resources = "It was OK";
        break;
       
       case "3":
        $resources = "Not Informative";
        break; 
    }

    switch($ux){
      case "1":
        $ux = "Very Satisfied";
        break;

      case "2":
        $ux = "It was OK";
        break;
       
       case "3":
        $ux = "Dissatisfied";
        break; 
    }

    $sql_check = "SELECT * FROM coursefeedback WHERE username = '$username'";
    $results = mysqli_query($conn, $sql_check);

    if(mysqli_num_rows($results) > 0){
        echo "<script>alert('You have submitted your feedback!!!');";
        echo "window.location.href='course_feedback.php';</script>";
    }
    else{
      $sql = "INSERT INTO coursefeedback(username, ui, resources, ux, feedback, date, time) "."VALUES('$username', '$ui', '$resources', '$ux', '$feedback', '$submit_date', '$submit_time');";
        $query = mysqli_query($conn, $sql);
      echo "<script>alert('Thank you for your feedback!!!');";
      echo "window.location.href='user_homepage.php';</script>";
    }
  }
}

?>