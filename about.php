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
<?php 
    session_start();
    if(!$_SESSION['suname']){
        header('Location: login.php');
    }
?>
<body>
    <nav class="navbar navbar-light navbar-expand-md d-xl-flex align-items-xl-center navigation-clean-button navbar-fixed-top">
        <div class="container"><a class="navbar-brand" href="#">Page</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-xl-flex align-items-xl-center"
                id="navcol-1">
                
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="content.php" style="color: #ff3f3f;">OFFICE SPACES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="cart.php" style="color: #ff3f3f;">CART</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="contact.php" style="color: #ff3f3f;">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="about.php" style="color: #ff3f3f;">About Us</a></li>
                    <?php 
                        if($_SESSION['suname'] == "admin@gmail.com"){
                          echo '<li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="admin_panel.php" style="color: #ff3f3f;">Admin Panel</a></li>';  
                        }
                    ?>
                </ul><form method="post"><span class="d-xl-flex align-items-xl-center navbar-text actions"> <button data-bs-hover-animate="swing" class="login" type="submit" style="color: #FF3F3F; border:none; background-color: white;" name="logout">LOGOUT</button></span></form></div>
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header("Location: login.php");
                }
                ?>
        </div>
    </nav>
    
    <div class="container" style="margin-top: 20px;">
        
    </div>
    <div>
        <div class="container text-center" style="margin-top: 50px;margin-bottom:50px;">
            <img src="/content/3.png" height="50%" width="50%">
            <p>We at uniòn want to bring a change in real estate into a premium workspace with all the world class aminities. 
			We are focused at delivering the best in class service through design and experience . 
			We provide exceptional work culture with centres spread across the major cities of India .</p>
        </div>
    </div>
    <?php include("contactPhp.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>