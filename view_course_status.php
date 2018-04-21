<?php 

session_start();

include('connection.php');

$username = $_SESSION['admin_username'];
$query = "SELECT * FROM tutorial";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Course Status Page</title>

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto small-navbar-links">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?php echo $username;?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="admin_page.php">Back</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <h2>LearnX Course Status</h2>
    <br>
        <div class="table-responsive">
            <?php if(mysqli_num_rows($result) > 0){
            echo "<table class='table'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th scope='col'>Step id</th>";
                    echo "<th scope='col'>username</th>";
                    echo "<th scope='col'>Navbar Section</th>";
                    echo "<th scope='col'>User Profile Section</th>";
                    echo "<th scope='col'>Portfolio Section</th>";
                    echo "<th scope='col'>Contact Section</th>";
                 echo "</tr>";
             echo "</thead>";
             echo "<tbody>";
             while($row = mysqli_fetch_array($result)){

                 switch ($row['step1']){
                     case "1":
                     $row['step1'] = "Done";
                     break;

                     case "0":
                     $row['step1'] = "Not Done";
                     break;
                 }

                 switch ($row['step2']){
                    case "1":
                    $row['step2'] = "Done";
                    break;

                    case "0":
                    $row['step2'] = "Not Done";
                    break;
                }

                switch ($row['step3']){
                    case "1":
                    $row['step3'] = "Done";
                    break;

                    case "0":
                    $row['step3'] = "Not Done";
                    break;
                }

                switch ($row['step4']){
                    case "1":
                    $row['step4'] = "Done";
                    break;

                    case "0":
                    $row['step4'] = "Not Done";
                    break;
                }
                echo "<tr>";
                     echo "<td>" .$row['stepID']. "</td>";
                     echo "<td>" .$row['username']. "</td>";
                     echo "<td>" .$row['step1']. "</td>";
                     echo "<td>" .$row['step2']. "</td>";
                     echo "<td>" .$row['step3']. "</td>";
                     echo "<td>" .$row['step4']. "</td>";
                echo "</tr>";
             }
                 
             echo "</tbody>";
        echo "</table>";
        }
            ?>
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