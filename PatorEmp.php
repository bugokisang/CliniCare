
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="text/css" href="img/ccLogo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    .login,
    .image {
      min-height: 100vh;

    }

    .bg-image {
      background-image: url('img/LP5.png');

      background-position: center center;
      background-repeat: no-repeat;
    background-size: auto 50% ;
    }



    .btn-primary{
        background-color:#6267FC !important;
    }
    .btn-secondary{
        background-color:#FF6697 !important;
        border:none;
    }


    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light ">
            <div class="login d-flex align-items-center py-5 ">

                <!-- Demo content-->
                <div class="container opacity-1">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">CliniCare</h3>

                            <p class="text-muted mb-4">Please chose a category to login</p>
                            <form>

<!--  REMEMBER ME PART
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div> -->
                                
                                <button id="patient" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" >
                                	<a href="patient/index.php" style="color:white;text-decoration: none; display: block;">Patient</a></button>
                                <button id="doctor" class="btn btn-secondary btn-block text-uppercase mb-2 rounded-pill shadow-sm"><a href="doctor/index.php" style="color:white;text-decoration: none; display: block;">Doctor</a></button>
                               
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
</body>
</html>
