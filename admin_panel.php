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
    if($_SESSION['suname'] != "admin@gmail.com"){
        header('Location: index.php');
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
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="swing" href="admin_panel.php" style="color: #ff3f3f;">Admin Panel</a></li>
                </ul><form method="post"><span class="d-xl-flex align-items-xl-center navbar-text actions"> <button data-bs-hover-animate="swing" class="login" type="submit" style="color: #FF3F3F; border:none; background-color: white;" name="logout">LOGOUT</button></span></form></div>
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header("Location: login.php");
                }
                ?>
        </div>
    </nav>
    <div class="container">
        <h1 style="margin-top: 15px;"><strong>Admin Panel</strong></h1>
        <p style="color: rgba(0,0,0,0.5);">Add content to the site.</p>
        <hr>
    </div>
    <div class="container">
        <h4 style="margin-bottom: 80px;"><strong>Add Item</strong></h4>
    </div>
    <div>
        <?php include("addDetails.php"); ?>
        <div class="container">
            <form method="POST" enctype="multipart/form-data">
                <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $error; ?></h5>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: 'Titillium Web', sans-serif;vertical-align: middle;">Name of the Item</p>
                        </div>
                        <div class="col col-md-8"><input class="form-control shadow" type="text" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 40px;border-top: none;border-right: none;border-left: none;" name="itemName"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: 'Titillium Web', sans-serif;vertical-align: middle;">Description</p>
                        </div>
                        <div class="col col-md-8"><textarea class="form-control shadow" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 100px;border-top: none;border-right: none;border-left: none;" name="desc"></textarea></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: 'Titillium Web', sans-serif;vertical-align: middle;">Cost per day</p>
                        </div>
                        <div class="col col-md-8"><input class="form-control shadow" type="text" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 40px;border-top: none;border-right: none;border-left: none;" name="cost"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: 'Titillium Web', sans-serif;vertical-align: middle;">Location</p>
                        </div>
                        <div class="col col-md-8"><input class="form-control shadow" type="text" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 40px;border-top: none;border-right: none;border-left: none;" name="location"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: 'Titillium Web', sans-serif;vertical-align: middle;">Images</p>
                        </div>
                        <div class="col col-md-8"><input type="file" class="shadow" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 40px;border-top: none;border-right: none;border-left: none;color: rgba(33,37,41,0.57);" multiple="" accept="image/*" name="itemImage"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col text-center"><button class="btn btn-primary" type="submit" style="width: 30%;background-color: red;margin-top: 30px;"><strong>Add!</strong></button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>