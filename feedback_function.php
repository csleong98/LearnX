<?php
include('connection.php');

date_default_timezone_set('Asia/Kuala_Lumpur');

$name = $_POST['name'];
$email = $_POST['email']; 
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];
$submit_date = date('Y-m-d');
$submit_time = date('g:i:s');

if(isset($_POST['feedback_submit']))
{
  if(($name == "" || $email == "") || ($feedback == "")){
    echo "<script>alert('Please insert all required details');";
    echo "window.location.href='feedback.php';</script>"; 
  }
  elseif($rating == "Rate here..."){
    echo "<script>alert('Please rate the experience');";
    echo "window.location.href='feedback.php';</script>";
  }
  else{

    switch($rating){
      case "1":
        $rating = "Very Satisfied";
        break;

      case "2":
        $rating = "OK";
        break;
       
       case "3":
        $rating = "Dissatisfied";
        break; 
    }

    $sql_check = "SELECT * FROM feedback";
    $results = mysqli_query($conn, $sql_check);

    if(mysqli_num_rows($results) >= 0){
      $sql = "INSERT INTO feedback(name, email, feedback, rating, date, time) "."VALUES('$name', '$email', '$feedback', '$rating', '$submit_date', '$submit_time');";
      $query = mysqli_query($conn, $sql);
      echo "<script>alert('Thank you for your feedback!!!');";
      echo "window.location.href='feedback.php';</script>";
    }
    else{
      echo "<script>alert('Error submitting feedback!!!');";
      echo "window.location.href='feedback.php';</script>";
    }

    
  }
}

?>
