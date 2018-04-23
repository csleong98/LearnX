<?php 

session_start();

include('connection.php');

$username = $_SESSION['login_username'];

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $username;?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/checkbox.css" rel="stylesheet">

</head>

<<body id="page-top">

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">LearnX</a>
</nav>
<div class="container" style="margin-top: 7em; margin-bottom: 4em;">
    <?php 
    
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $results = mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) >= 0){
            while($row = mysqli_fetch_array($results)){
                $edit_username = $row['username'];
                $fullname = $row['realname'];
                $email = $row['email'];
                $password = $row['password'];
                $confirm_password = $row['confirm_password'];
            }
        }
    ?>
    <form class="col-lg-8 mx-auto" action="edit_profile.php" method="POST">
        <h2>User Profile</h2>
        <span><small>*Current user information is shown automatically as label</small></span>
        <br>
        <span><small>*If you wish to update the information, you will only need to type in the new information inside the input</small></span>
        <br>
        <span><small>*Click submit if you are done typing in the new information</small></span>
        <hr>
        <div class="form-group">
            <label class="mr-sm-2" for="fullname"><?php echo "Full Name: $fullname";?></label>
            <input name="fullname" class="form-control" type="text" placeholder="Insert new fullname">
        </div>

        <div class="form-group">
            <label class="mr-sm-2" for="username">Username: <?php echo $edit_username;?></label>
        </div>

        <div class="form-group">
            <label class="mr-sm-2" for="email">Email: <?php echo $email;?></label>
        </div>

        <div class="form-group">
            <label class="mr-sm-2" for="password">Password: <?php echo $password;?></label>
            <input name="password" class="form-control" type="password" placeholder="Insert new password">
        </div>

        <div class="form-group">
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete Account</button>
                <a href="user_homepage.php" class="btn btn-primary">Cancel & Back</a>
        </div>
    </form>
</div>


<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-twitter fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->]

<!-- Custom JavaScript for this theme -->

</body>

</html>