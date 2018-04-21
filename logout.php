<?php

  session_start();
  if(isset($_SESSION['login_username'])){
    echo "<script>alert('Goodbye! ".$_SESSION['login_username']."');</script>";
  }
  else {
    echo "<script>alert('Goodbye! ".$_SESSION['admin_username']."');</script>";
  }

  session_destroy();
  echo "<script>window.location.href='index.php'</script>";

 ?>