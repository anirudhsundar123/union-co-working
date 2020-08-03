<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background-image: url(&quot;assets/img/shridhar-gupta-dZxQn4VEv2M-unsplash.jpg&quot;);background-size: cover;background-repeat: repeat;height: 100%;">
    <nav class="navbar navbar-light navbar-expand-md d-xl-flex align-items-xl-center navigation-clean-button navbar-fixed-top navbar-main" style="background-color: rgba(255,255,255,0);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Page</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse d-xl-flex align-items-xl-center" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="content.php" style="color: #ff3f3f;">OFFICE SPACES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="cart.php" style="color: #ff3f3f;">CART</a></li>
                    <?php 
                        if($_SESSION['suname'] == "admin@gmail.com"){
                          echo '<li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="admin_panel.php" style="color: #ff3f3f;">Admin Panel</a></li>';  
                        }
                    ?>
                </ul><form method="post"><span class="d-xl-flex align-items-xl-center navbar-text actions"> <button data-bs-hover-animate="swing" class="login" type="submit" style="color: #FF3F3F; border:none; background-color: transparent;" name="logout">LOGOUT</button></span></form></div>
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header("Location: login.php");
                }
                ?>
        </div>
    </nav>
    <div class="container" style="height: 100%;">
        <div class="row align-items-center h-100">
            <div class="col" style="text-align: center;height: 500px;padding-top: 30px;">
                <p class="text-break" style="font-size: 62px;font-family: Montserrat, sans-serif;font-weight: 800;color: white;text-shadow: 5px 5px #000;margin-top: 51px;padding-top: 70px;">Stay productive with modern workspace and co-working solutions </p>
            </div>
        </div>
    </div>
    <footer style="position: fixed;bottom: 0;width: 100%;">
        <hr style="width: 70%;margin-top: 50px;background-color: #ffffff;">
        <div class="container">
            <p class="text-center" style="font-family: Montserrat, sans-serif;color: rgba(248,248,248,0.81);">Designed with&nbsp;<i class="fa fa-heart" style="color: red;"></i>&nbsp;</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>