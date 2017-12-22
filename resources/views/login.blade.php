<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pinjam Ruang">
    <meta name="author" content="Ahmad Ardiansyah">

    <title>Bejan's Chicken</title>

    <link rel="icon" type="text/css" href="upload/images/room.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

</head>

<body>
    <!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <br><br>
    <div class="container">
        <div class="card card-container">
            <img class="profile-img-card" src="upload/images/room.png" alt="" />
            <p id="profile-name" class="profile-name-card">Bejan's Chicken</p>
            
            <form class="form-signin" method="post" action="signin.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="nrp" type="text" id="inputEmail" class="form-control" placeholder="Email">
                <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <a href='home'><button name="submitsignin" class="btn btn-lg btn-primary btn-block btn-signin" type="button">Sign in</button></a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
