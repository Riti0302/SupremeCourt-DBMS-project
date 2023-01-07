<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Awsome Icons -->
        <link rel="stylesheet" href="./css/all.css">

        <!-- External Css -->
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="css/ss.css">

        <title>SignUp</title>
    </head>

    <body>
        <!-- header -->

        <div class="header">
            <a href="./Home.html" class="logo">
                <img src="./img/peakpx.jpeg" class="header-img" alt="emblumn of india">
            </a>

            <center>
                <div class="header-left">
                    <div>
                        <h1>Supreme Court of India</h1>
                        <h3 class="headerhead-2">
                            || यतो धर्मस्ततो जय: ||
                        </h3>
                    </div>
                </div>
            </center>
        </div>

        <!--Supreme Court Carousel-->

        <div id="SCcarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#SCcarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#SCcarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#SCcarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#SCcarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#SCcarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/SCimg1.jpeg" class="d-block w-100" alt="Pic1">
                </div>
                <div class="carousel-item">
                    <img src="./img/Scimg2.jpeg" class="d-block w-100" alt="Pic2">
                </div>
                <div class="carousel-item">
                    <img src="./img/Scimg3.jpeg" class="d-block w-100" alt="Pic3">
                </div>
                <div class="carousel-item">
                    <img src="./img/Scimg4.jpeg" class="d-block w-100" alt="Pic4">
                </div>
                <div class="carousel-item">
                    <img src="./img/Scimg5.jpeg" class="d-block w-100" alt="Pic5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#SCcarousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true">

                          </span>
                          <span class="visually-hidden">
                              Previous
                          </span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#SCcarousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true">

                          </span>
                          <span class="visually-hidden">
                              Next
                          </span>
                </button>
        </div>



        <!-- Nav bar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 Menu<span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home">Home</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Body Content -->

        <div class="container my-4" style="border: .5px solid #000000">
            <h1 class="text-center">Signup Here</h1>
            <form action="SignUp.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                </div>                        
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>                        
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required>                    
                    <small id="emailHelp" class="form-text text-muted">
                        <strong>Make sure to type the same password</strong>
                    </small>
                    </div>
                    <button type="submit" style="width:10%;" class="btn btn-primary">
                        SignUp
                    </button>
                </div>
            </form>
        </div>

         <!-- Footer -->
        <footer class="footer ">
            <div class="container ">
                <div class="row ">
                    <div class="col-6 col-sm-3 offset-sm-1 align-self-center ">
                        <h5>Links</h5>
                        <ul class="list-unstyled ">
                            <li>
                                <a href="./Home.html"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li><a href="./Contact.html "><i class="fas fa-id-card"></i>Contact</a></li>
                            <li><a href="./History.html"><i class="fas fa-history"></i>History</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-7 offset-sm-1 1align-self-center ">
                        <h5 id="footer-links ">Address</h5>
                        <address class="address ">
                            <strong><h3>Supreme Court of India</h3></strong>	 
                            Tilak Marg,<br>        
                             New Delhi-110001 (INDIA)<br>
                            <i class="fa fa-phone fa-lg "></i>: 011-23385903, 23384874<br>
                            <i class="fa fa-fax fa-lg "></i>: 011-23385551<br>
                            <i class="fa fa-envelope fa-lg"></i>:<a href="mailto:scbaec@gmail.com ">scbaec@gmail.com</a>
                        </address>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-auto ">
                        <p>Copyright © 2022 Developed by<br><strong>Nikhil Raj And Ritika Mishra</strong></p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="
            https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
            sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>

        <script src="
            https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="
            https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
                    <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
        </script> -->
    </body>
</html>