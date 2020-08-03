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
                    <li class="nav-item" role="presentation"></li>
                </ul><span class="d-xl-flex align-items-xl-center navbar-text actions"> <a class="btn btn-light action-button" role="button" href="signup.php"><strong>SIGNUP</strong></a></span></div>
        </div>
    </nav>
    <div style="margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 150px;">
                    <?php include("loginPhp.php");?>
                    <h5 style="color:red; float:left; font-size:12px;" class="mt-2"><?php echo $error; ?></h5>
                    <form method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col" style="margin-bottom: 50px;text-align: center;"><input class="shadow form-control" type="email" style="width: 80%;border-top: none;border-right: none;border-left: none;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Email" autofocus="" required="" name="email"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col" style="text-align: center;"><input class="shadow form-control" type="password" style="width: 80%;border-top: none;border-top: none;border-right: none;border-left: none;margin-bottom: 50px;font-family: Montserrat, sans-serif;height: 35px;" placeholder="Password"
                                        required="" name="pass"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col" style="text-align: center;margin-bottom: 5px;"><button class="btn btn-primary" type="submit" style="font-family: Montserrat, sans-serif;background-color: #ff3f3f;border: none;border-radius: 20PX;"><strong>LOGIN</strong></button></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col" style="text-align: center;"><a class="forgotpassword" href="signup.php" style="color: rgba(235,59,96,0.5);">New to Page? <strong>Register here!</strong></a></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6"><img class="img-fluid" src="assets/img/undraw_authentication_fsn5.png" style="width: 600px;margin: 30px;text-align: center;"></div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>