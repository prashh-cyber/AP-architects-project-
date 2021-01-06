<?php

require_once 'navbar.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP Architects & Engineers</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
    $('#carousel-indicator').carousel({});
</script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

     <!-- <div class="container-fluid bg-secondary EditContainer">
        <h6 class="editH6-1">Anurag Bhansali : <i class="fa fa-phone"></i> <span>0000-0000-00</span></h6>
        <h6 class="editH6-2">Prachi Bhansali : <i class="fa fa-phone"></i> <span>0000-0000-00</span></h6>
    </div> -->
    <!-- navbar -->

    <!-- <nav class="navbar navbar-expand-md navbar-light  top-fixed">
        <div>
            <a class="navbar-brand font-weight-bolder NavbarEdit text-dark">AP Architects & Engineers</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto px-5 text-center">
                <li class="nav-item px-3">
                    <a class="nav-link  font-weight-bold HomeEdit" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold AboutEdit" href="placeholder.php">About us</a>
                </li>
            </ul>
        </div>
    </nav> -->

    <section class="container">
        <div class="image">
            <img src="pic2.jpg" class="img-fluid" alt="">
            <div class="centered">
                <form action="submit-form.php" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="city" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="tel" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile number" required>
                    </div>
                    <div class="form-group">
                        <label>Planning</label>
                        <input type="text" name="planning" class="form-control" id="exampleInputPassword1" placeholder="Planning" required>
                    </div>
                    <div class="form-group">
                        <label>Design Requirement</label>
                        <input type="text" name="design" class="form-control" id="exampleInputPassword1" placeholder="Design Requirement" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>


        </div>

    </section>

    <!-- <section class="container">
        <div class="heading">
            <h1 class="text-center text-dark py-5">Our Projects</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-1 col-xm">
                <div class="card">
                    <img src="pic2.jpg" class="img-fluid Editrow" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-1 col-xm">
                <div class="card">
                    <img src="pic2.jpg" class="img-fluid" alt="">
                </div>
                        <div>
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, deleniti.</p>
                        </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-1 col-xm">
                <div>
                    <img src="pic2.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-1 col-xm">
                <div>
                    <img src="pic2.jpg" class="img-fluid py-3" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-1 col-xm">
                <div>
                    <img src="pic2.jpg" class="img-fluid py-3" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-1 col-xm">
                <div>
                    <img src="pic2.jpg" class="img-fluid py-3" alt="">
                </div>
            </div>
        </div>
    </section>
 -->


    <section class="container-fluid bg-light">
        <div class="ourServices text-center section-header text-dark py-5">
            <div class="ourServicesHeading">Service Provided</div>
            <div class="underline"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="card">
                    <img class="card-img-top" src="landsacape.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="text-center text-dark">landscape Design</h3>
                        <p class="card-text text-dark text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="card">
                    <img class="card-img-top" src="Interior.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="text-center text-dark">Interior Design</h3>
                        <p class="card-text text-center text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="card">
                    <img class="card-img-top" src="engg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="text-center text-dark">Engineering Solutions</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pt-5 center d-flex mx-auto pb-5 largeImg">
                <div class="card">
                    <img class="card-img-top" src="design.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="text-center text-dark">Architectural Planning & Design</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid" id="clickMe">
        <div class="ourProjects text-center section-header text-dark py-5">
            <div class="ourProjectsHeading">Our Quality Projects</div>
            <div class="underline"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <div class="card cardEdit">
                    <img class="card-img-top cardImgEdit" src="design.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>Architects</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project1.php" class="text-white nav-link">Read more</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <div class="card cardEdit">
                    <img class="card-img-top" src="engg.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>Engineers</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project2.php" class="nav-link text-white">Read more</a> </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <div class="card cardEdit">
                    <img class="card-img-top" src="landsacape.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>landscape</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project3.php" class="nav-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <div class="card cardEdit">
                    <img class="card-img-top" src="pic1.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>Interior design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project4.php" class="nav-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <div class="card cardEdit">
                    <img class="card-img-top" src="pic2.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>House planning</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project5.php" class="nav-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pb-5 d-block mx-auto">
                <div class="card cardEdit">
                    <img class="card-img-top" src="design.jpg" alt="Card image cap">
                    <div class="middle">
                        <h3>Exterior designs</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem accusantium sapiente eligendi!</p>
                        <button name="submit" class="btn btn-sm btn-success"> <a href="projects/project6.php" class="nav-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>
        </div>


        <footer class="container-fluid bg-light">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <h6 class="font-weight-bold">
                    Learn Online
                </h6>
                <div>Engineering courses</div>
                <div>Engineering Concepts</div>
                <div>Architectural works</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-5 pl-5">
                <h6 class="font-weight-bold text-center">
                    Contact us On
                </h6>
                <div class="text-center he"><a href="#"><i class="fa fa-facebook"></i></a></div>
                <div class="text-center"><a href="#"><i class="fa fa-twitter"></i></a></div>
                <div class="text-center"><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  col-12 pt-5 pl-5">
                <h6 class="font-weight-bold text-center">
                    CEO of AP Architects & Engineers
                </h6>
                <div class="text-center">Anurag Bhansali</div>
                <div class="text-center">Prachi Bhansali</div>
            </div>
        </div>
        </footer>

        <footer class="footer pt-3">
            <p class="text-center bg-secondary text-white ">Copyright &copy; AP Architects & Engineers. All rights Reserved</p>
        </footer>
</body>

</html>