<?php 

session_start();

include('connection.php');

$username = $_SESSION['admin_username'];
    
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/userpage.css" rel="stylesheet">
</head>

<body>

    <!-- browser's navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-header navbar-brand">LearnX Admin
        </div>
        <!-- navbar links -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto small-navbar-links">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?php echo $username;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-outline-primary" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                    <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">LearnX Registered User</h5>
                        <a href="view_user.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                    <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">User Course Status</h5>
                        <a href="course_status.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                    <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">General Website Feedback</h5>
                        <a href="general_feedback.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                    <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Registered User Course Feedback</h5>
                        <a href="course_feedback.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap 4 Javascript -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Javascript -->
</body>

</html>