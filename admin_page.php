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
    <link href="css/landing-page.css" rel="stylesheet">


    <style>
        .wrapper {
            position: relative;
            overflow: hidden;
        }

        .wrapper:after {
            content: '';
            display: block;
            padding-top: 60%;
        }

        .wrapper img {
            width: auto;
            height: 100%;
            max-width: none;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }
    </style>
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
                    <a class=" btn btn-outline-primary" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="padding-top: 7em; padding-bottom: 7em;">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                    <div class="wrapper">
                    <img class="card-img-top" src="img/registered-user.svg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">LearnX Registered User</h5>
                        <a href="view_user.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                <div class="wrapper">
                    <img class="card-img-top" src="img/course_status.svg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">User Course Status</h5>
                        <a href="view_course_status.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                <div class="wrapper">
                    <img class="card-img-top" src="img/general_feedback.svg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">General Website Feedback</h5>
                        <a href="view_general_feedback.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="card" style="">
                <div class="wrapper">
                    <img class="card-img-top" src="img/course_feedback.svg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Registered User Course Feedback</h5>
                        <a href="view_course_feedback.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Bootstrap 4 Javascript -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Javascript -->
</body>

</html>