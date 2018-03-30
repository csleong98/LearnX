<?php 

include ('../backend_functions/connection.php');
    
	if (isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
		$sql = "SELECT * FROM user WHERE realname='$fullname'";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
    }
    
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$sql = "SELECT * FROM user WHERE username='$username'";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
    }
    
	if (isset($_POST['email'])) {
		$email = $_POST['player1'];
		$sql = "SELECT * FROM team WHERE email='$email'";
		$results = mysqli_query($db, $sql);
		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
    }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            $hashed_password = md5($password);
            $sql = "SELECT * FROM user WHERE password='$hashed_password'";
            $results = mysqli_query($db, $sql);
            if (mysqli_num_rows($results) > 0) {
                echo "taken";	
            }else{
                echo 'not_taken';
            }
            exit();
        }
        if (isset($_POST['confirm_password'])) {
            $confirm_password = $_POST['confirm_password'];
            $hashed_confirm_password = md5($confirm_password);
            $sql = "SELECT * FROM user WHERE hashed='$hashed_confirm_password'";
            $results = mysqli_query($db, $sql);
            if (mysqli_num_rows($results) > 0) {
                echo "taken";	
            }else{
                echo 'not_taken';
            }
            exit();
        }
	if (isset($_POST['submit'])) {
		$fullname = $_POST['realname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$sql = "SELECT * FROM user";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results) >= 0) {
		
			$query = "INSERT INTO user(username, realname, email, password, hash) "."VALUES('$username', '$fullname', '$email', '$hashed_password', '$hashed_confirm_password');"; 
			$results = mysqli_query($conn, $query);
			echo 'saved';
			exit();
		}
	}
?>