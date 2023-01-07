<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awsome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- External Css -->
    <link rel="stylesheet" href="judge.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">


    <title>Supreme Court Of India</title>
</head>

<body>
    <!-- header -->

    <div class="header">
        <a href="./Home.html" class="logo">
            <img src="./img/peakpx.jpeg" class="header-img" alt="emblumn of india">
        </a>
        <div class="header-left">
            <div>
                <h1>Supreme Court of India</h1>
                <h3 class="headerhead-2">
                    || यतो धर्मस्ततो जय: ||
                </h3>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <div id="SCloginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!--  Model Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
            <!-- <a class="navbar-brand active" href="#">HOME</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Menu<span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="padding: 0px; margin-top: 12px; margin-left: 5px;" aria-current="page" href="./anc.html"><i class="fas fa-home">Home</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anc.html">Notification & Circular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loggedinjv.php" tabindex="-1" aria-disabled="true">Daily Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ef.html" tabindex="-1" aria-disabled="true">E-Filing</a>
                    </li>
                </ul>
                <li class="navbar-nav nav-item">
                    <a class="nav-link active" style="font-size: 1.3rem;" href="./StaffLogin.html"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="StaffLogin.html">
                        <i class="fas fa-sign-out-alt">Log Out</i>
                </button></a>
                </li>
            </div>
        </div>
    </nav>

    <!-- Body Content -->

    <div class="row">
        <div class="card col-sm-6">
            <div class=" card-title rounded text-center ">
                Quick Links
            </div>
            <div class="card-body ">
                <div class="list-group ">
                    <li class="list-group-item list-group-item-action text-center ">
                        <a href="./loggedinJudges.php" style="color:red;" class="card-body-text "><strong>●Judges</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="./loggedinadvocates.php" class="card-body-text "><strong>●Advocates</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="./loggedincs.php" class="card-body-text "><strong>●Case Status</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="loggedinjv.php" class="card-body-text "><strong>●Judgements &amp; Verdicts</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="./loggedincaveat.html" class="card-body-text "><strong>●Caveat</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="./loggedincasecategory.html" class="card-body-text"><strong>●Case Category</strong></a>
                    </li>
                    <li class="list-group-item text-center ">
                        <a href="./loggedinCourtfees.html" class="card-body-text "><strong>●Court Fees</strong></a>
                    </li>
                </div>
            </div>
        </div>
        <div class="container col-sm-6 offset-sm-3 body-content" style="margin-top: 50px; margin-left: 200px;">
            <div class="centerbar">
                        <h1><center>Judge Details</center> </h1>
                    <div class="tab">
                        <button1 class="tablinks" onclick="openTab(event, 'Insert')" id="defaultOpen"><center>Insert</center></button1>
                        <button1 class="tablinks" onclick="openTab(event, 'Delete')"><center>Delete</center></button1>
                    </div>

                    <div id="Insert" class="tabcontent">
                    <form action="judgeinsert.php" method="POST" onsubmit="return executeOnSubmit();">
                        Sl. No.:
                        <br>
                        <input type="text" name="j_id" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        Name:
                        <br>
                        <input type="text" name="j_name" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        Designation:
                        <br>
                        <input type="text" name="j_designation" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        DoB:
                        <br>
                        <input type="text" placeholder="YYYY-MM-DD" name="j_dob" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        DoA:
                        <br>
                        <input type="text" placeholder="YYYY-MM-DD" name="j_doa" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        DoR:
                        <br>
                        <input type="text" placeholder="YYYY-MM-DD" name="j_dor" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        Notable Judgements:
                        <br>
                        <input type="text" name="j_nj" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        About:
                        <br>
                        <input type="text" name="j_about" required style="width: 100%; height: 5vh; border-radius: 4px;">
                        <br>
                        <input type="submit" style="margin-top: 10px;"/><br><br>
                        </form>
                    </div>              
            </div>

            <div id="Delete" class="tabcontent">
              <table >
                    <tr>
                        <th>Sl. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>DoB</th>
                        <th>DoA</th>
                        <th>DoR</th>
                        <th>Notable Judgements</th>
                        <th>About</th>
                        <th></th>
                    </tr>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "scdatabase";
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT id,name,designation,dob,doa,dor,nj,about FROM judges";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row

                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td> ". $row["id"]."</td><td>" . $row["name"]."</td><td>".$row["designation"]."</td><td>".$row["dob"]."</td><td>".$row["doa"]."</td><td>".$row["dor"]."</td><td>".$row["nj"]."</td><td>".$row["about"]."</td><td>"." <button style='color:white; background-color:red; border-radius: 4px; onclick=\"location.href='judgedetialdelete.php?id=".$row['id']."'\">Delete</button>"."</td></tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();

                    ?> 

                </table>
  
            </div>
            <script>
                function openTab(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
        </div>
    </div>
    <!-- <br><br><br><br><br><br> -->


    <!-- Footer -->
    <footer class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-6 col-sm-3 offset-sm-1 align-self-center ">
                    <h5>Links</h5>
                    <ul class="list-unstyled ">
                        <li><a href="./Home.html"><i class="fa fa-home"></i>Home</a></li>
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
                        <i class="fa fa-envelope fa-lg ">:<a href="mailto:scbaec@gmail.com ">scbaec@gmail.com</a></i>
                        
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
</body>

</html>