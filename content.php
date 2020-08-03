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
    <div class="container" style="margin-top: 15px;">
        <div style="display: block;">
            <form method="post">
            <div class="location-search" style="display: inline;"><i class="fa fa-location-arrow" style="font-size: 23px;margin-right: 5px;color: #ff3f3f;"></i><input type="text" name="searchT" style="border-left: none;border-top: none;border-right: none;border-width: medium;margin-right: 5px;font-family: Montserrat, sans-serif;"
                    placeholder="Enter your location"></div><button class="btn btn-primary btn-sm" type="submit" style="background-color: #ff3f3f;border: none;border-radius: 0px;height: 30px;" name="search"><i class="fa fa-search"></i></button>
            </form>
            <?php
            if(isset($_POST['search'])) 
            echo '<script>window.location.href = "search.php?location='.$_POST['searchT'].'"</script>';
            ?>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h1 class="d-inline-block" style="margin-top: 20px;"><strong>Office Spaces &nbsp;</strong></h1>
        <hr>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <?php 
                    include("contentPhp.php");
                    displayItems();
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>