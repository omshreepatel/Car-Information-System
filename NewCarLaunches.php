<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>CarWorld</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="FontAwsome/all.min.css">
    <script type="text/javascript" src="FontAwsome/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="NewCarLaunches.css">
    <script type="text/javascript" src="style.js"></script>
</head>
<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>Wheels</span>Info </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
            <a href="#vehicles">vehicles</a>
        </nav>

        <div id="login-btn">
            <button class="btn">login</button>
            <i class="far fa-user"></i>
        </div>
    </header>
    <!-- <div class="container-fluid">
        <div class="navbar navbar-expand-md navbar-light bg-light fixed-top">
           
            <div class="navbar-brand"><a href="index.html"><img src="images/logo.png" class="rounded-circle shadow-sm" height="60" width="60" alt="carworld"></a></div>
            
            <a href="index.html" class="logo-text navbar-brand"><b><span class="text-primary"> C</span>ar<span class="text-primary">W</span>orld</b></a>
            
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>NEW CARS</b></a>
                    <div class="dropdown-menu bg-light text-center">
                        <a href="NewCarLaunches.html" class="dropdown-item"><b>NewCar Launches</b></a>
                        <a href="UpcomingCars.html" class="dropdown-item"><b>Upcoming Cars</b></a>
                        <a href="ElectricCars.html" class="dropdown-item"><b>Electric Cars</b></a>
                    </div>
                    </li>
                    <li class="nav-item"><a href="USEDCARS.html" class="nav-link"><b>USED CARS</b></a></li>
                    <li class="nav-item"><a href="EXPERTREVIEWS.html" class="nav-link"><b>EXPERT REVIEWS </b></a></li>
                </ul>
                <form action="" class="form-inline ml-auto justify-content-center ">
                       <div class="input-group">
                        <input type="search" class="form-control " placeholder="Search"> 
                        <div class="input-group-append">
                        <button class="btn btn-secondary"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                 </form>
               <div class="text-center" data-target="#loginmodal" data-toggle="modal"><i style="font-size: 30px;margin: 10px; cursor: pointer;" class="fas fa-user-circle"></i></div>
            </div>
        </div> -->
        <!-- <div class="modal fade" id="loginmodal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-body">
                      <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
                       <br>
                       <h5 class="modal-title">Login to CarWorld</h5>
                
                        <form action="" class="form mt-4">
                            <div class="form-group mt-4">
                                <input type="email" class="form-control" placeholder="Enter Your Email Id" required>
                            </div>
                            <div class="form-group mt-4">
                                <input type="password" class="form-control" placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group mt-4">
                                <input type="checkbox" class="coustom-control" id="form-chekbox" required><label for="form-chekbox" class="coustom-label"> &nbsp;Keep me signed in</label>
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="reset" class="btn btn-danger">reset</button>
                        </form>
                        <div><h5 class="text-center">or</h5></div>
                        <a href="https://accounts.google.com/b/0/AddMailService" style="
                        text-decoration: none;">
                        <div class="text-center text-muted border p-3"><img src="images/google-logo.jpg" width="20" alt="google-logo" class="img-fluid"> Continue With Google</div>
                        </a>
                        <div class="text-center mt-3 p-3"><Span class="ml-3">Don’t have an account?</Span><a href="" data-target="#loginmodal1" data-toggle="modal" id="signup"> Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loginmodal1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    
                    <div class="modal-body">
                      <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
                       <br>
                       <h5 class="modal-title">Sign Up to CarWorld</h5>
                
                        <form action="" class="form mt-4">
                           <div class="form-group mt-4">
                               <label style="font-size: 13px;" for="" class="form-label">NAME</label>
                                <input type="text" class="form-control" placeholder="Enter Your Full Name" required>
                            </div>
                            <div class="form-group mt-4">
                               <label style="font-size: 13px;" for="" class="form-label">EMAIL</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email Id" required>
                            </div>
                            <div class="form-group mt-4">
                               <label style="font-size: 13px;" for="" class="form-label">MOBILE</label>
                                <input type="number" class="form-control" placeholder="Enter Your Number">
                            </div>
                            <div class="form-group mt-4">
                               <label style="font-size: 13px;" for="" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" required>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Sign Up</button>
                        </form>
                        <div class="text-center mt-3 p-3"><Span class="ml-3">Already have an account?</Span><a href="" id="login" data-target="#loginmodal" data-toggle="modal"> Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
        <br>
        <br>
        <br>
        <br> 
        <div class="container">
            <h3>New Car Launches</h3>
            <p>The newly launched cars in India in 2021 include Maruti Suzuki Swift ₹ 6.70 Lakh and Tata Safari ₹ 17.82 Lakh. There are 15 new cars launched in India in the last six months on CarWorld.</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Maruti-Suzuki-Swift.html">
                            <img  src="images/swift/swift1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Maruti-Suzuki-Swift.html">
                            <h4 class=" mt-3">Maruti Suzuki Swift</h4>
                            <p class="mt-3"><b>₹ 6.70 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Maruti-Suzuki-Swift.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                     <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Tata-Safari.html">
                            <img  src="images/tata-safari/tata-safari1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Tata-Safari.html">
                            <h4 class=" mt-3">Tata Safari</h4>
                            <p class="mt-3"><b>₹ 17.82 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Tata-Safari.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                     <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Renault-Kiger.html">
                            <img  src="images/Renault-Kiger/Renault-Kiger1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Renault-Kiger.html">
                            <h4 class=" mt-3">Renault Kiger</h4>
                            <p class="mt-3"><b>₹ 6.45 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Renault-Kiger.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Jeep-Compass.html">
                            <img  src="images/Jeep-Compass/Jeep-Compass1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Jeep-Compass.html">
                            <h4 class=" mt-3">Jeep Compass</h4>
                            <p class="mt-3"><b>₹ 20.15 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Jeep-Compass.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="BMW-X5.html">
                            <img  src="images/BMW-X5-M/BMW-X5-M-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="BMW-X5.html">
                            <h4 class=" mt-3">BMW X5 M</h4>
                            <p class="mt-3"><b>₹ 2.25 Crore</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="BMW-X5.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> -->
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Toyota-Innova-Crysta.html">
                            <img  src="images/Toyota-Innova-Crysta/Toyota-Innova-Crysta11.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Toyota-Innova-Crysta.html">
                            <h4 class=" mt-3">Toyota Innova Crysta</h4>
                            <p class="mt-3"><b>₹ 19.40 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Toyota-Innova-Crysta.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                    <<div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Nissan-Magnite.html">
                            <img  src="images/Nissan-Magnite/Nissan-Magnite-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Nissan-Magnite.html">
                            <h4 class=" mt-3">Nissan Magnite</h4>
                            <p class="mt-3"><b>₹ 6.47 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Nissan-Magnite.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features</b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Mini-Clubman.html">
                            <img  src="images/Mini-Clubman/Mini-Clubman-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Mini-Clubman.html">
                            <h4 class=" mt-3">Mini Clubman</h4>
                            <p class="mt-3"><b>₹ 49.85 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Mini-Clubman.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> 
                    <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Toyota-Urban-Cruiser.html">
                            <img  src="images/Toyota-Urban-Cruiser/Toyota-Urban-Cruiser-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div> -->
                        <!-- <div class="col-md-6">
                           <a href="Toyota-Urban-Cruiser.html">
                            <h4 class=" mt-3">Toyota Urban Cruiser</h4>
                            <p class="mt-3"><b>₹ 9.82 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Toyota-Urban-Cruiser.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Honda-Jazz.html">
                            <img  src="images/Honda-Jazz/Honda-Jazz-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Honda-Jazz.html">
                            <h4 class=" mt-3">Honda Jazz</h4>
                            <p class="mt-3"><b>₹ 9.05 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Honda-Jazz.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Mahindra-Marazzo.html">
                            <img  src="images/Mahindra-Marazzo/Mahindra-Marazzo-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Mahindra-Marazzo.html">
                            <h4 class=" mt-3">Mahindra Marazzo</h4>
                            <p class="mt-3"><b>₹ 14.06 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Mahindra-Marazzo.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                     <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Renault-Duster.html">
                            <img  src="images/Renault-Duster/Renault-Duster1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Renault-Duster.html">
                            <h4 class=" mt-3">Renault Duster</h4>
                            <p class="mt-3"><b>₹ 11.30 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Renault-Duster.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>  -->
                    <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                            <a href="Audi-RS7-Sportback.html"> 
                            <img  src="images/Audi-RS7-Sportback/Audi-RS7-Sportback.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Audi-RS7-Sportback.html">
                            <h4 class=" mt-3">Audi RS7 Sportback</h4>
                            <p class="mt-3"><b>₹ 2.24 Crore</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Audi-RS7-Sportback.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> --> -->
                    <!-- <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Honda-WR-V.html">
                            <img  src="images/Honda-WR-V/Honda-WR-V-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Honda-WR-V.html">
                            <h4 class=" mt-3">Honda WR-V</h4>
                            <p class="mt-3"><b>₹ 10.18 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Honda-WR-V.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features</b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div>
                    <div class="row border mt-3" id="newcarline">
                        <div class="col-md-6">
                           <a href="Volkswagen-T-Roc.html">
                            <img  src="images/Volkswagen-T-Roc/Volkswagen-T-Roc-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                           <a href="Volkswagen-T-Roc.html">
                            <h4 class=" mt-3">Volkswagen T-Roc</h4>
                            <p class="mt-3"><b>₹ 25.15 Lakh</b>&nbsp;<span class="text-muted"> onwords</span></p>
                            <p class="text-muted">On-Road Price, vadodara</p>
                            <a href="Volkswagen-T-Roc.html" id="carouselbtn" class="btn btn-info text-white mb-3"><b>Show Features </b><span><i class="fas fa-arrow-right"></i></span></a>
                            </a>
                        </div>
                    </div> -->
                </div>
                 <div class="col-md-3 ml-3 mt-3">
               <!-- <h4>All Brands</h4>
                <div class="row">
                   <center>
                    <div class="col-12">
                       <div class="row">
                       <div class="col-6 col-md-12 border"><a href="Maruti-Suzuki-Cars.html"><img src="images/company-logo/maruti.png" width="150" alt="MarutiSuzukiCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="Hyundai-cars.html"><img src="images/company-logo/hyundai.png" width="150" alt="Hyundaicars" class="img-fluid"></a></div>
                       <div class=" col-6 col-md-12 border"><a href="Tata-cars.html"><img src="images/company-logo/tata.png" width="150" alt="Tatacars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="KiaCars.html"><img src="images/company-logo/kia.png" width="150" alt="KiaCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="HondaCars.html"><img src="images/company-logo/honda.png" width="150" alt="HondaCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="ToyotaCars.html"><img src="images/company-logo/toyota.png" width="150" alt="ToyotaCars" class="img-fluid"></a></div>
                    </div>
                    </div>
                    </center>
                    <center>
                    <div class="col-12">
                       <div class="row">
                       <div class="col-6 col-md-12  border"><a href="AudiCars.html"><img src="images/company-logo/audi.png" width="150" alt="AudiCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="Mercedes-BenzCars.html"><img src="images/company-logo/mercedesbenz.png" width="150" alt="Mercedes-BenzCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="BMWCars.html"><img src="images/company-logo/bmw.png" width="150" alt="BMWCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border">                                <td><a href="JaguarCars.html"><img src="images/company-logo/jaguar.png" width="150" alt="JaguarCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="TeslaCars.html"><img src="images/company-logo/tesla.jpg" width="150" alt="TeslaCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="MGCars.html"><img src="images/company-logo/mg.png" width="150" alt="MGCars" class="img-fluid"></a></div>
                    </div>
                    </div>
                    </center>
                    <center>
                    <div class="col-12">
                        <div class="row collapse" id="mycollapse">
                       <div class="col-6 col-md-12 border"><a href="BugattiCars.html"><img src="images/company-logo/bugatti.png" width="150" alt="BugattiCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="LamborghiniCars.html"><img src="images/company-logo/lamborghini.png" width="150" alt="LamborghiniCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="FerrariCars.html"><img src="images/company-logo/ferrari.png" width="150" alt="FerrariCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="Rolls-RoyceCars.html"><img src="images/company-logo/rollsroyce.png" width="150" alt="Rolls-RoyceCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="BentleyCars.html"><img src="images/company-logo/bentley.png" width="150" alt="BentleyCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="WMotorsLykan.html"><img src="images/company-logo/w-motors.jpg" width="150" alt="WMotorsLykan" class="img-fluid"></a></div>
                    </div>
                   <div class="row collapse" id="mycollapse">
                       <div class="col-6  col-md-12 border"><a href="PorscheCars.html"><img src="images/company-logo/porsche.png" width="150" alt="PorscheCars" class="img-fluid"></a></div>
                       <div class="col-6  col-md-12 border"><a href="JeepCars.html"><img src="images/company-logo/jeep.png" width="150" alt="JeepCars" class="img-fluid"></a></div>
                       <div class="col-6  col-md-12 border"><a href="AstonMartinCars.html"><img src="images/company-logo/aston-martin.png" width="150" alt="AstonMartinCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="MaseratiCars.html"><img src="images/company-logo/maserati.png" width="150" alt="MaseratiCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="MiniCars.html"><img src="images/company-logo/mini.png" width="150" alt="MiniCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="RenaultCars.html"><img src="images/company-logo/renault.png" width="150" alt="RenaultCars" class="img-fluid"></a></div>
                    </div>
                    <div class="row collapse" id="mycollapse">
                       <div class="col-6 col-md-12  border"><a href="CitroenCars.html"><img src="images/company-logo/citrone.png" width="150" alt="CitroenCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="FordCars.html"><img src="images/company-logo/ford.png" width="150" alt="FordCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="VolkswagenCars.html"><img src="images/company-logo/walkwagan.jpg" width="150" alt="VolkswagenCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="LandRoverCars.html"><img src="images/company-logo/landrover.png" width="150" alt="LandRoverCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="DatsunCars.html"><img src="images/company-logo/datsun.png" width="150" alt="DatsunCars" class="img-fluid"></a></div>
                       <div class="col-6 col-md-12 border"><a href="Nissan-Cars.html"><img src="images/company-logo/nissan.jpg" width="150" alt="Nissan-Cars" class="img-fluid"></a></div>
                        <div class="col-6 col-md-12 border"><a href="SkodaCars.html"><img src="images/company-logo/skoda.png" width="150" alt="SkodaCars" class="img-fluid"></a></div>
                        <div class="col-6 col-md-12 border"><a href="MahindraCars.html"><img src="images/company-logo/mahindra.png" width="150" alt="MahindraCars" class="img-fluid"></a></div>
                    </div>
                    <div class="row text-center">
                        <div class="border" >
                        <button class="btn  btn-info" id="showbtn" aria-expanded="false" data-toggle="collapse" data-target="#mycollapse">show more brands <b><i class="fas fa-angle-down"></i></b></button>
                       </div>
                    </div>
                    </div>
                    </center>
                </div>
                  </div>
            </div>
        </div> -->
        <!-- <div class="container">
            <div class="row">
               <div class="col mt-3">
                   <h3>Upcoming Cars</h3>
               </div>
                <div class="col">
                    <div class="row responsive1">
                     <div class="col-lg-4 col-sm-6">
                     <a href="Jeep-2021-Wrangler.html">
                     <div class="card">
                    <img src="images/Jeep-2021-Wrangler/Jeep-2021-Wrangler1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Jeep 2021 Wrangler</h5>
                       <b>₹ 62.50 - 68.00 Lakh</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect :  March 2021</p>
                    </div>
                         </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Jaguar-I-Pace.html">
                     <div class="card">
                    <img src="images/Jaguar-I-Pace/Jaguar-I-Pace1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Jaguar I-Pace</h5>
                       <b>₹ 1.50 - 2.00 Crore</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : 23rd March 2021</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Mercedes-Benz-A-Class-Limousine.html">
                     <div class="card">
                    <img src="images/Mercedes-Benz-A-Class-Limousine/Mercedes-Benz%20A-Class-Limousine1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h6 class="card-title">Mercedes-Benz A-Class Limousine</h6>
                       <b>₹ 35.00 Lakh - 1.00 Crore</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : 25th March 2021</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="Jaguar-E-Pace.html">
                     <div class="card">
                    <img src="images/Jaguar-E-Pace/Jaguar-EPace1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Jaguar E-Pace</h5>
                       <b>₹ 50.00 - 60.00 Lakh</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : March  2021 (Tentative)</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Audi-New-Q3.html">
                     <div class="card">
                    <img src="images/Audi-New-Q3/Audi-New-Q3-1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Audi New Q3</h5>
                       <b>₹ 33.00 - 44.00 Lakh</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : March 2021 (Tentative)</p>
                    </div>
                                    </div></a>
                                </div>
                            </div>
                            <a href="UpcomingCars.html" style="text-decoration: none;" class="mt-2 ml-4">View All Upcoming Cars <b><i class="fas fa-angle-right"></i></b></a>
                </div>
            </div>
            
           
            <div class="row">
               <div class="col mt-3">
                   <h3>Electric Cars</h3>
               </div>
                <div class="col">
                    <div class="row responsive1">
                     <div class="col-lg-4 col-sm-6">
                     <a href="Tata-Nexon-EV.html">
                     <div class="card">
                    <img src="images/Tata-Nexon-EV/Tata-Nexon-EV-1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Tata Nexon EV</h5>
                       <b>₹ 15.11 Lakh</b><span style="font-size: 13px;"> onwords</span>
                       
                       <p>On-Road Price, vadodara</p>
                    </div>
                         </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Hyundai-Kona-Electric.html">
                     <div class="card">
                    <img src="images/Hyundai-Kona-Electric/Hyundai-Kona-Electric-1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Hyundai Kona Electric</h5>
                        <b>₹ 24.89 Lakh</b><span style="font-size: 13px;"> onwords</span>
                       
                       <p>On-Road Price, vadodara</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Mercedes-Benz-EQC.html">
                     <div class="card">
                    <img src="images/Mercedes-Benz-EQC/Mercedes-Benz-EQC-1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h6 class="card-title">Mercedes-Benz EQC</h6>
                        <b>₹ 1.30 Crore</b><span style="font-size: 13px;"> onwords</span>
                       
                       <p>On-Road Price, vadodara</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="Jaguar-E-Pace.html">
                     <div class="card">
                    <img src="images/Jaguar-E-Pace/Jaguar-EPace1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Jaguar E-Pace</h5>
                       <b>₹ 50.00 - 60.00 Lakh</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : March  2021 (Tentative)</p>
                    </div>
                                    </div></a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                <a href="Audi-e-tron.html">
                     <div class="card">
                    <img src="images/Audi-e-tron/Audi-etron-1.jpg" alt="" class="card-img-top">
                    <div class="card-body bg-light text-muted">
                        <h5 class="card-title">Audi e-tron</h5>
                        <b>₹ 1.00 - 1.50 Crore</b><span style="font-size: 13px;"> Estimeted price</span>
                       <p>When to Expect : June  2021 (Tentative)</p>
                    </div>
                                    </div></a>
                                </div>
                            </div>
                            <a href="ElectricCars.html" style="text-decoration: none;" class="mt-2 ml-4">View All Electric Cars <b><i class="fas fa-angle-right"></i></b></a>
                </div>
            </div>
        </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
     <script type="text/javascript" src="scroll-js-script.js"></script>
     <div class="container-fluid mt-5" id="footer">
               <div class="row navbar bg-dark text-white">
                  <div class="col-12">
                     <center>
                      <a href="index.html" class="logo-text navbar-brand"><b><span class="text-primary"> C</span>ar<span class="text-primary">W</span>orld</b></a>
                      </center>
                  </div>
                  <div class="col-12 border"></div>
                   <div class="col-md-4 mt-md-n5">
                       <ul class="list-group">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="About-Us.html">About Us</a></li>
                           <li><a href="Terms&Conditions.html">Terms &amp; Conditions</a></li>
                           <li><a href="ContactUs.html">Contact Us</a></li>
                       </ul>
                       <div class="row">
                         <div class="col-12 mb-n3 mt-3">
                          <p>Connect with us</p>
                          </div>
                           <div class="col-1">
                           <a href="https://www.facebook.com/" >
                           <i style="font-size: 30px;" class="fab fa-facebook"></i>
                           </a>
                           </div>
                           <div class="col-1">
                            <a href="https://twitter.com/?lang=en">
                           <i style="font-size: 30px;" class="fab fa-twitter-square"></i>
                           </a>
                           </div>
                           <div class="col-1">
                            <a href="https://in.linkedin.com/">
                           <i style="font-size: 30px;" class="fab fa-linkedin"></i>
                           </a>
                           </div>
                           <div class="col-1">
                            <a href="https://www.instagram.com/?hl=en">
                           <i style="font-size: 30px;" class="fab fa-instagram-square"></i>
                           </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 mt-md-n5 mt-5">
                   <p><b>CarWorld: </b>A - 1, Karelibaug Road, Opp New Vuda Building, Near L &amp; T Circle, Jay Santhoshi Nagar Society, Karelibagh, Vadodara, Gujarat 390018</p>
                   <p><b>Phone: </b>+91 6354956340</p>
                   </div>
                   <div class="col-md-4 mt-5">
                       <div class="row">
                           <div class="col">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.5503001877332!2d73.19552431426902!3d22.324816047647555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54b301ff834e827!2sCar%20World!5e1!3m2!1sen!2sin!4v1615259644289!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row" style="background-color: black;">
                  <div class="col text-center">
                   <b class=" text-white">©2021 www.CarWorld.com</b>
                   </div>
               </div>
            </div> -->
</body>
</html>