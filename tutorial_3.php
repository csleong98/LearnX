<?php 

session_start();

include('connection.php');

$username = $_SESSION['login_username'];
$sql = "SELECT * FROM tutorial WHERE username = '$username'";
$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) >= 0){
    while($row = mysqli_fetch_array($results)){
        $step1 = $row['step1'];
        $step2 = $row['step2'];
        $step3 = $row['step3'];
        $step4 = $row['step4'];
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Building the portfolio section</title>

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
    <link rel="stylesheet" href="css/learn.css">

    <style>
        #profile-pic {
            margin: 2em 0 0 0;
        }

        .caption-title {
            margin: 10px 0 10px 0;
            padding: 20px 0 20px 0;
            text-align: center;
            font-size: 20px;
        }

        .rebel-divider {
            margin: 20px 0px;
            text-align: center;
        }

        .line {
            margin: 10px 10px;
            width: 40%;
            border-bottom: 3px solid black;
            display: inline-block;
        }

        .icon-line {
            display: inline-block;
        }

        .page-title {
            text-align: center;
            margin: 40px 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <!-- Sidebar Header -->
                <h3>Portfolio section Tutorial</h3>
            </div>
            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li>
                    <a class="chevron-dropdown" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">View Steps</a>
                    <ul id="homeSubmenu" class="list-unstyled collapse">
                        <li>
                            <p>View HTML Code</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <a type="button" class="btn btn-primary" href="tutorial3_code_block.html">View Code</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>Finish this tutorial here</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <form action="step3.php" method="POST">
                                            <div class="form-group">
                                                <div class="steps_checkbox">
                                                    <input type="checkbox" value="step3done" id="step3_checkbox" name="step3_checkbox" <?php if($step3==1 ){echo "checked";}else{echo
                                                        "";}?>/>
                                                    <label for="step3_checkbox"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                            </div>
                                        </form>
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
                        Sidebar Toggler
                    </button>
                </div>
                <!-- navbar links -->
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto small-navbar-links">
                        <li class="nav-item">
                            <a class="nav-link" href="user_homepage.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <?php echo $_SESSION['login_username'];?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
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
                <!-- About Me Section -->
                <section id="About">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <h1 class="page-title">Ola! I'm Cheese</h1>
                                <p>Front-end Developer in the making. Chee Seng has experience in graphics design. He is currently
                                    studying at Asia Pacific University and also learning about 3D designs to be able to
                                    do more than he used to.
                                </p>

                                <div class="rebel-divider">
                                    <span class="line"></span>
                                    <span class="icon-line fa fa-rebel fa-2x"></span>
                                    <span class="line"></span>
                                    <br>
                                    <br>
                                    <p>
                                        Front-end Developer
                                        <i class="fa fa-free-code-camp"></i>
                                        Graphics Designer
                                        <i class="fa fa-free-code-camp"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="profile-pic" class="rounded mx-auto d-block" src="img/me.jpg"> </div>
                            </div>
                    </div>
                </section>
                <!-- Projects -->
                <section id="Projects">
                    <div class="container">
                        <h1 class="page-title">Projects</h1>

                        <div class="rebel-divider">
                            <span class="line"></span>
                            <span class="icon-line fa fa-rebel fa-2x"></span>
                            <span class="line"></span>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img class="thumbnail-img img-fluid rounded mx-auto d-block" src="https://images.pexels.com/photos/219000/pexels-photo-219000.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                </div>
                                <div class="caption">
                                    <h3 class="caption-title">TRENDware Website</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img class="thumbnail-img img-fluid rounded mx-auto d-block" src="https://images.pexels.com/photos/194094/pexels-photo-194094.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                    <div class="caption">
                                        <h3 class="caption-title">SaferTrack Technologies Website</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img class="thumbnail-img img-fluid rounded mx-auto d-block" src="https://images.pexels.com/photos/220502/pexels-photo-220502.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                                    <div class="caption">
                                        <h3 class="caption-title">Cahaya Anugerah Dinamik Website</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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