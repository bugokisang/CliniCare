<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel="icon" type="text/css" href="img/ccLogo1.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<style>
    body{
        font-family: 'Poppins','Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    h3{
        color:#6267FC;
    }
    /*sign up btn  style*/
    .sglg .btn-outline-danger{
      border-color: #FF6697 !important;
      color: #FF6697 !important;
    }
    .sglg .btn-outline-danger:focus{
      background-color: #FF6697 !important;
      color: white !important;
    }
    /*log inbtn  style*/
    .sglg .btn-outline-info{
    border-color: #6267FC !important;
    color: #6267FC !important;
    }
    .sglg .btn-outline-info:focus{
      background-color: #6267FC !important;
      color: white !important;
    }


    .shadow{
      box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5);
    }
    h1,h2,h3,h4,h5,h6 {
      font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      font-weight: 700;
    }

    header.masthead {
      position: relative;
      background-color: #FF6697;
      background: url("img/bg-masthead.jpg") no-repeat center center;
      background-size: cover;
      padding-top: 3rem;
      padding-bottom: 8rem;
    }

    header.masthead .overlay {
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      opacity: 0.3;
    }

    header.masthead h1 {
      font-size: 2rem;
    }

    @media (min-width: 768px) {
      header.masthead {

        padding-bottom: 12rem;
      }
      header.masthead h1 {
        font-size: 3rem;
      }
    }


/*card shems*/

    .showcase .showcase-text {
      padding: 3rem;
    }

    .showcase .showcase-img {
      min-height: 30rem;
      background-size: cover;
    }

    @media (min-width: 768px) {
      .showcase .showcase-text {
        padding: 7rem;
      }
    }


    /*zoom zoom stuff*/
    .features-icons {
      padding-top: 7rem;
      padding-bottom: 7rem;
    }

    .features-icons .features-icons-item {
      max-width: 20rem;
    }

    .features-icons .features-icons-item .features-icons-icon {
      height: 7rem;
    }

    .features-icons .features-icons-item .features-icons-icon i {
      font-size: 4.5rem;
    }

    .features-icons .features-icons-item:hover .features-icons-icon i {
      font-size: 5rem;
    }




    footer.footer {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

</style>


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-5" href="#"><img class="mr-3" src="img/cclogo1.png" alt="" style="height:30px;">CliniCare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="row collapse navbar-collapse ml-2" id="navbarSupportedContent">
    <div class="col-md-8 ">
    <ul class="navbar-nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#features">Features</a>
      </li>

    </ul>
    </div>
    <div class="col-md-4">
    <form class="sglg form-inline my-2 my-lg-0" style="float:right; display:inline;">
      <!-- <button class="btn btn-outline-danger my-2 my-sm-0 mr-2" type="submit" >Sign Up</button> -->
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><a href="PatorEmp.php" style="text-decoration: none;">Login</a></button>
    </form>
    </div>
  </div>
</nav>


<header class="masthead text-black ">
  <div class="overlay"></div>
  <div class="row">
      <div class="offset-lg-2">
      </div>
        <div class=" col-sm-4 mx-auto mt-5">
          <h1 class=" mt-5 display-1"><strong>CliniCare</strong></h1>
          <h3 class="">Healthcare Management System of the University Clinic</h3>



        <div class="d-grid gap-2">
          <button type="button" class="btn btn-primary btn-lg p-3 pr-5 pl-5">Set my appointment date</button>
        </div>
      </div>
    <div class="col-sm-5 mx-auto mt-5">
      <img src="img/LP1.png" alt=""style="height :700px; width:400px;">
    </div>
  </div><!--<div class="row"> -->
</header>
</body>

 <!-- Icons Grid -->
 <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <i class="fa fa-plus m-auto" aria-hidden="true"></i>
            </div>
            <h3>Appoinment Booking</h3>
            <p class="lead mb-0">Patient’s online appointment registration to the university clinic.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
             <i class="fa fa-file-text m-auto" aria-hidden="true"></i>
            </div>
            <h3>Electronic Mail Prescription</h3>
            <p class="lead mb-0">An online prescription given by the clinic staff </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <i class="bi bi-calendar2-check m-auto"></i>
            </div>
            <h3>Avoid Inconvenience</h3>
            <p class="lead mb-0">Schedule an available time and date and record data in real time</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="showcase" id="features">
    <div class="container-fluid p-0">
      <div class="row no-gutters shadow">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/LP2.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Patient Historical Medical Data</h2>
          <p class="lead mb-0">Medical data of the patient gaethred from the university clinic in order for management and healthcare analysis.</p>
        </div>
      </div>
      <div class="row no-gutters shadow">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/LP3.png');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Management of Employee Schedule &amp; Attendance </h2>
          <p class="lead mb-0">Management of employee schesule will be a great help in booking and visitaion apoointments synchronization.</p>
        </div>
      </div>
      <div class="row no-gutters shadow">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/LP4.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Inventory Management</h2>
          <p class="lead mb-0">Inventory medications are furthre organized and regulated</p>
        </div>
      </div>
    </div>
  </section>


   <!-- About Us -->
   <footer class="footer bg-light" id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">

        <p style="color: #6267FC; font-weight:light;">ABOUT US</p>
        <p>Clinicare is a system that manages patients, employees by the administrators which enables the management to keep track of  visitations, appointments, inventory, and feedback results in order to ensure quality healthcare services. This is for the benefit of university clinic in order to help organize historical and new data, manage employees performance that will prevent any risk of data loss of data damage due to recorded data in a printed paper.</p>



          <p class="text-muted small mb-4 mb-lg-0">&copy; CliniCare 2021. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
              <i class="fa fa-circle fa-2x fa-fw" aria-hidden="true"></i>

              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
              <i class="fa fa-circle fa-2x fa-fw" aria-hidden="true"></i>

              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
              <i class="fa fa-circle fa-2x fa-fw" aria-hidden="true"></i>

              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</html>

