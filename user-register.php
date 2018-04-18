<?php 

include ('connection.php');
    
	if (isset($_POST['fullname_check'])) {
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
    
	if (isset($_POST['username_check'])) {
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
    
	if (isset($_POST['email_check'])) {
		$email = $_POST['email'];
		$sql = "SELECT * FROM user WHERE email='$email'";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}
	
	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['password_confirm'];
		$sql = "SELECT * FROM user";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results) >= 0) {
		
			$query = "INSERT INTO user(username, realname, email, password, confirm_password) "."VALUES('$username', '$fullname', '$email', '$password', '$confirm_password');"; 
			$results = mysqli_query($conn, $query);
		}

		$tutor_sql = "SELECT * FROM tutorial";
		$results2 = mysqli_query($conn, $tutor_sql);
		if(mysqli_num_rows($results2) >= 0){
			$query2 = "INSERT INTO tutorial(username) "."VALUES('$username');"; 
			$results2 = mysqli_query($conn, $query2);
			echo 'saved';
			exit();
		}
	}
?>