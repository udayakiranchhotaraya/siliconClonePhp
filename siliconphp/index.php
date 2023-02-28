<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="refSit.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">-->
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins">
          <style>
            body {
              font-family: 'Poppins', sans-serif;
            }
          </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--<script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/owl.carousel.min.js"></script>-->
        <!--<script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/custom.js"></script>-->
    </head>
    <body>
        <div class="container-fluid">
                <!--<div class="col-md-3"><img src="C:\xampp\htdocs\siliconphp\elements\sit-logo.svg"></div>
                <div class="col-md-9">
                    <nav class="nav">
                        <a class="nav-link active" href="#">Active</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link disabled">Disabled</a>
                      </nav>
                </div>-->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="https://silicon.ac.in/"><img src="elements\sit-logo.svg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#">About us<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">ERP</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="regForm.php">Register</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Administrator</a>
                        </li>
                      </ul>
                      <!--<form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary my-2 my-sm-0" type="button" id="button-addon2"><img src="C:\xampp\htdocs\siliconphp\elements\search-white.svg"></button>
                        </div>
                        </form>-->
                      <!--<div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>-->
                      <div class="form-inline my-2 my-lg-0">
                        <input type="Search" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary my-2 my-sm-0" type="button" id="button-addon2"><img src="elements\search-white.svg"></button>
                        </div>
                      </div>
                    </div>
                    
                  </nav>
        </div>
        <br>
        <section class="section-block">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-9 offset-2 ">
                        <h1 class="tagline"><b>Building technology for human progress</b></h1>
                        <p class="edu">We are an engineering institute advancing science and technology education for students from all walks of life.</p>
                        <a button type="button" class="btn btn-primary" href="regForm.php">ENROLL NOW</a> 
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pr-md-0 ">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="elements\1-1-1.jpg" class="d-block w-100">
                            </div>
                             <div class="carousel-item">
                                <img src="elements\Image-5-1.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="elements\Image-4-1.png" class="d-block w-100">
                            </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
        </section>
        <section>
        <!--div class="container-fluid">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div-->
        </section>
        <br>
        <div class="jumbotron jumbotron-fluid jumbobg">
          <div class="container">
            <section class="footer-2">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/footer_logo.svg" class="mb-4">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <p>Silicon Institute of Technology,<br>Silicon Hills, Patia,<br>Bhubaneswar – 751024<br>Odisha, India.</p>
                      </div>
                      <div class="col-md-4">
                          <p>Phone: <a style="color:white" href="tel:9937289499" target="_blank">9937289499</a>/ <a style="color:white" href="tel:7381499499" target="_blank">7381499499</a> </p>
                          <p>Email: <a style="color:white" href="mailto:info@silicon.ac.in" target="_blank">info@silicon.ac.in</a> </p>
                          <ul>
                                      <a href="https://www.facebook.com/siliconite/" target="_blank"><img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/social-media/facebook.svg"></a>
                                      &emsp;<a href="https://twitter.com/Silicontech_bbs?s=08" target="_blank"><img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/social-media/twitter.svg"></a>
                                      &emsp;<a href="https://www.linkedin.com/school/silicontech-bbs" target="_blank"><img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/social-media/linkedin.svg"></a>
                                      &emsp;<a href="https://www.instagram.com/silicontech_bbs/" target="_blank"><img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/social-media/instagram.svg"></a>
                          </ul>
                      </div>
                      <div class="col-md-4">
                          <img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/sit.svg">
                          <h6>© Silicon Institute of Technology. All rights reserved.<br></h6>
                      </div>
                  </div>
              </div>
          </section>
          </div>
        </div>
    </body>
</html>