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

    <title>Home</title>

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
        <div class="navbar-header navbar-brand">
        </div>
        <!-- navbar links -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto small-navbar-links">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_SESSION['login_username'];?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="card-deck">
            <div class="card" style="">
                <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Building the navbar</h5>
                    <p class="card-text"></p>
                    <a href="tutorial_1.php" class="btn btn-primary">Start</a>
                    <p class="card-text"><small class="text-muted">Status: <?php if($step1 == 0){echo "Pending";}else{echo "Done";}?></small></p>
                </div>
            </div>
            <div class="card" style="">
                <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Building the user profile section</h5>
                    <p class="card-text"></p>
                    <a href="tutorial_2.php" class="btn btn-primary">Start</a>
                    <p class="card-text"><small class="text-muted">Status: <?php if($step2 == 0){echo "Pending";}else{echo "Done";}?></small></p>
                </div>
            </div>
            <div class="card" style="">
                <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Building the porfolio section</h5>
                    <p class="card-text"></p>
                    <a href="tutorial_3.php" class="btn btn-primary">Start</a>
                    <p class="card-text"><small class="text-muted">Status: <?php if($step3 == 0){echo "Pending";}else{echo "Done";}?></small></p>

                </div>
            </div>
            <div class="card" style="">
                <img class="card-img-top" src="https://images.pexels.com/photos/19678/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Building contact me section</h5>
                    <p class="card-text"></p>
                    <a href="tutorial_4.php" class="btn btn-primary">Start</a>
                    <p class="card-text"><small class="text-muted">Status: <?php if($step4 == 0){echo "Pending";}else{echo "Done";}?></small></p>

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