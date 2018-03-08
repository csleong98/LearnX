<?php 

    $conn = mysqli_connect("boleh.tv", "boleh", "TWSB2018", "boleh_LearnX", "3306");
    
    if(mysqli_connect_errno()) {
        echo "No Connection";
    }
    else{
        echo "success";
    }

?>