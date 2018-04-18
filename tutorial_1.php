<?php 

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creating the navigation bar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link href="css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" href="css/learn.css">

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <!-- Sidebar Header -->
                <h3>Collapsible Sidebar</h3>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li>
                    <a class="chevron-dropdown" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Creating Navbar</a>
                    <ul id="homeSubmenu" class="list-unstyled collapse">
                        <li>
                            <p>Creating navigation bar is pretty easy.</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal1">View Code!</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="chevron-dropdown" href="#step2" data-toggle="collapse" aria-expanded="false">Chapter 2</a>
                    <ul class="collapse list-unstyled" id="step2" aria-expanded="true">
                        <li>
                            <p>Second Step</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal2">View Code!</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="chevron-dropdown" href="#step3" data-toggle="collapse" aria-expanded="false">Chapter 3</a>
                    <ul class="collapse list-unstyled" id="step3" aria-expanded="true">
                        <li>
                            <p>Third Step</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal3">View Code!</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="content">
            <!-- browser's navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="navbar-header navbar-brand">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="fa fa-align-left"></i>
                        Toggle Sidebar
                    </button>
                </div>
                <!-- navbar links -->
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto small-navbar-links">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo $_SESSION['login_username'];?></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="user_homepage.php">Log Out</a>
                            </div>
                        </li>
                </div>
            </nav>
            <!-- /browser's navbar -->

            <div class="browser-container">
                <div class="browser-row">
                    <!-- 3 dots of browser window -->
                    <div class="column left">
                        <span class="dot" style="background:#ED594A;"></span>
                        <span class="dot" style="background:#FDD800;"></span>
                        <span class="dot" style="background:#5AC05A;"></span>
                    </div>
                    <div class="column middle">
                        <input type="text" value="http://www.mywebsite.com">
                    </div>
                </div>

                <!-- browser's navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>

                    <!-- hamburger navbar -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto small-navbar-links">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Me</a>
                            </li>
                    </div>
                </nav>
                <!-- /browser's navbar -->


                <!-- header -->
                <div class="content">
                    <header class="masthead text-white text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <h3>Navbar tutorial</h3>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <!-- /header -->
            </div>
        </div>

        <!-- Modals -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signupModalHeader">Sign Up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="fullname">Full Name:</label>
                                <input class="form-control" type="text" name="fullname" id="fullname" placeholder="Enter fullname here">
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder="Enter username here">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" type="text" name="password" id="user-password" placeholder="Enter password here">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password:</label>
                                <input class="form-control" type="text" name="confirm-password" id="user-confirm-password" placeholder="Re-enter password here">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
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
    <script src="js/sidebar.js"></script>
</body>

</html>