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

<body>
    <nav class="navbar navbar-light navbar-expand-md d-xl-flex align-items-xl-center navigation-clean-button navbar-fixed-top">
        <div class="container"><a class="navbar-brand" href="#">Page</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-xl-flex align-items-xl-center"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    
                </ul><span class="d-xl-flex align-items-xl-center navbar-text actions"> <a data-bs-hover-animate="swing" class="login" href="login.php" style="color: #FF3F3F;">LOGIN</a><a class="btn btn-light disabled action-button" role="button" href="#"><strong>SIGNUP</strong></a></span></div>
        </div>
    </nav>
    <?php include("signPhp.php");?>
    <div style="margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img src="assets/img/undraw_Login_v483.png" width="400px"></div>
                <div class="col-md-6">
                    <h3 style="font-family: Montserrat, sans-serif;font-weight: 800;margin-top: 20PX;text-align: center;"><strong>REGISTER HERE!</strong></h3>
                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $error; ?></h5>
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-row" style="height: 62px;">
                                <div class="col" style="margin-bottom: 50px;text-align: center;height: 62px;">
                                    <input class="form-control shadow register-name" type="text" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Name" autofocus="" name="uname">
                                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $errorName; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row" style="height: 62px;">
                                <div class="col" style="margin-bottom: 50px;text-align: center;height: 62px;">
                                    <input class="shadow form-control register-email" type="email" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Email" required="" name="email">
                                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $errorEmail; ?></h5>
                                    
                                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $errorE; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row" style="height: 62px;">
                                <div class="col" style="margin-bottom: 50px;text-align: center;height: 62px;">
                                    <input class="form-control shadow regsiter-password" type="password" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Password" name="pass">
                                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $errorPass; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row" style="height: 62px;">
                                <div class="col" style="margin-bottom: 50px;text-align: center;height: 62px;"><input class="form-control shadow regsiter-retype-password" type="password" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Retype Password" name="repass">
                                <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $errorRepass; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row" style="height: 62px;">
                                <div class="col" style="margin-bottom: 50px;text-align: center;height: 62px;"><input class="form-control shadow register-dob" type="date" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;color: rgba(0,0,0,0.54);" placeholder="Date of Birth" name="date"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" style="background-color: #ff3f3f;font-family: Montserrat, sans-serif;width: 80%;">SignUp</button>

                    </form>
                                        </div>
            </div>
        </div>
    </div><br>
    <!-- <footer style="position: fixed;bottom: 0;width: 100%;">
        <hr style="width: 70%;margin-top: 50px;">
        <div class="container">
            <p class="text-center" style="font-family: Montserrat, sans-serif;color: rgba(33,37,41,0.38);">Designed with&nbsp;<i class="fa fa-heart" style="color: red;"></i>&nbsp;</p>
        </div>
    </footer> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>