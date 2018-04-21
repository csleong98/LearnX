<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LearnX - Course Feedback</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- <link href="css/buttons.css" rel="stylesheet"> -->
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">LearnX</a>
    </nav>
    <div class="container" style="margin-top: 7em; margin-bottom: 4em;">
        <form class="col-lg-8 mx-auto" action="course_feedback_function.php" method="POST">
            <h2>Portfolio Building Feedback form</h2>
            <hr>
            <div class="form-group">
                <label class="mr-sm-2" for="ui">How is the user interface of the course:</label>
                <select name="ui" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option selected>Rate here...</option>
                    <option value="1">Very clean and easy to use</option>
                    <option value="2">It was OK</option>
                    <option value="3">Very ugly and messy</option>
                </select>
            </div>

            <div class="form-group">
                <label class="mr-sm-2" for="resources">How informative is the materials presented in the course:</label>
                <select name="resources" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option selected>Rate here...</option>
                    <option value="1">Very Informative</option>
                    <option value="2">It was OK</option>
                    <option value="3">Not Informative</option>
                </select>
            </div>

            <div class="form-group">
                <label class="mr-sm-2" for="ux">Learning experience rating:</label>
                <select name="ux" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option selected>Rate here...</option>
                    <option value="1">Very Satisfied</option>
                    <option value="2">It was OK</option>
                    <option value="3">Dissatisfied</option>
                </select>
            </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea name="feedback" class="form-control" rows="3" placeholder="Write your feedback back"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" name="course_feedback_submit" class="btn btn-primary">Submit</button>
                <a href="user_homepage.php" class="btn btn-primary">Back</a>
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