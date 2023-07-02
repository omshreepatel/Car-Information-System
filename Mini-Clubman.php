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
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="style.js"></script>
</head>
<body>
    <div class="container-fluid" >
        <div class="navbar navbar-expand-md navbar-light bg-light fixed-top" >
           
            <div class="navbar-brand"><a href="index.html"><img src="images/logo.png" class="rounded-circle shadow-sm" height="60" width="60" alt="carworld"></a></div>
            
            <!-- <a href="index.html" class="logo-text navbar-brand"><b><span class="text-primary"> C</span>ar<span class="text-primary">W</span>orld</b></a> -->
            
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav text-center ml-auto">
                    <!-- <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>NEW CARS</b></a> -->
                    <div class="dropdown-menu bg-light text-center">
                        <!-- <a href="NewCarLaunches.html" class="dropdown-item"><b>NewCar Launches</b></a>
                        <a href="UpcomingCars.html" class="dropdown-item"><b>Upcoming Cars</b></a>
                        <a href="ElectricCars.html" class="dropdown-item"><b>Electric Cars</b></a> -->
                    </div>
                    </li>
                    <!-- <li class="nav-item"><a href="USEDCARS.html" class="nav-link"><b>USED CARS</b></a></li>
                    <li class="nav-item"><a href="EXPERTREVIEWS.html" class="nav-link"><b>EXPERT REVIEWS</b></a></li> -->
                </ul>
                <!-- <form action="" class="form-inline ml-auto justify-content-center ">
                       <div class="input-group">
                        <input type="search" class="form-control " placeholder="Search"> 
                        <div class="input-group-append">
                        <button class="btn btn-secondary"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                 </form>
               <div class="text-center" data-target="#loginmodal" data-toggle="modal"><i style="font-size: 30px;margin: 10px; cursor: pointer;" class="fas fa-user-circle"></i></div>
            </div> -->
        </div>
        <div class="modal fade" id="loginmodal">
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
    </div>
    <br>
    <br>
    <br>
    <br>
    <link rel="stylesheet" href="brand-style.css">
    <script type="text/javascript" src="brand-style.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row" id="swift">
                    <div class="col-12"><h3>Mini Clubman</h3></div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <nav class="nav">
                    <li class="nav-item "><a href="#swift" class="nav-link active">Clubman</a></li>
                    <li class="nav-item"><a href="#Specifications" class="nav-link ">Specifications</a></li>
                    <li class="nav-item"><a href="#Images" class="nav-link ">Images</a></li>
                </nav>
            </div>
        </div>
        <div class="row border mt-3 m-1">
            <div class="col-md-6 border-right">
                <div class="row">
                    <div class="col-12">
                        <img src="images/Mini-Clubman/Mini-Clubman-1.jpg" alt="" class="img-fluid m-1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6 border">
                        <div class="row">
                            <div class="col-12">
                                <p style="font-size: 15px;" class="pt-3 pl-3 pb-0 m-0">Versions</p>
                                <b class="pl-3 pt-1">Cooper S</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 border">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <p style="font-size: 15px;" class="pt-3 pl-3 pb-0 m-0">City</p>
                                <b class="pl-3 pt-1">Vadodara</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <h3>₹ 49.85 Lakh</h3>
                        <p class="mt-2">On-Road Price, Vadodara</p>
                    </div>
                    <div class="col-12 ">
                       <div class="row p-3">
                       <div class="col-12 bg-light p-2">
                        <p>EMI ₹ 78,646 &nbsp;<span style="font-size: 12px;">For 5 Years</span></p>
                        <h5 class="text-info" >Get EMI Assistance</h5>
                           </div>
                    </div>
                    </div>
                    <div class="col-8 m-3" id="Specifications">
                        <button class="btn btn-block btn-danger p-2"><b style="font-size: 20px;">Get March Offers</b></button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                <h3>Mini Clubman Key Specifications</h3>
            </div>
            <div class="col-12 mt-3">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-dollar-sign"></i> <b>PRICE</b></p>
                                <p class="m-0">₹ 49.85 Lakh</p>
                            </div>
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-tachometer-alt"></i>
                                <b>MILEAGE</b></p>
                                <p class="m-0">14 kmpl</p>
                            </div>
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-car"></i> <b>TRANSMISSION</b></p>
                                <p class="m-0">Automatic (Dual Clutch)</p>
                            </div>
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-gas-pump"></i>
                                <b>FUEL TYPE</b></p>
                                <p class="m-0">Petrol </p>
                            </div>
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-oil-can"></i> <b>ENGINE</b></p>
                                <p class="m-0">1998 cc</p>
                            </div>
                            <div class="col-md-4 border p-2 bg-light">
                                <p class="m-0"><i class="fas fa-chair"></i>
                                <b>SEATING CAPACITY</b></p>
                                <p class="m-0">4 Seater</p>
                            </div>
                             <span id="Images"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row mt-3">
            <div class="col-12">
                <h3>Mini Clubman Summary</h3>
            </div>
            <div class="col-12 text-justify bg-light p-3 border" style="border-radius: 8px;">
            <p class="m-0">MINI Clubman Cooper S is available with a range of customisation options to suit individual taste. The five-seat vehicle features the distinctive split rear door design and offers a good 360 – 1,250-litres of boot space.
            </p>
            <p class="collapse" id="pcollapse">The MINI Clubman Cooper S gets moonwalk grey metallic colour as standard, while the optional colour list include British racing green, chilli red, melting silver, midnight black, pepper white, starlight blue, thunder grey, white silver, and enigmatic black. Customers can opt from body coloured roof and mirror caps, black roof and mirror caps, and white roof and mirror caps. Some of the other standard feature highlights include LED headlights, LED fog lights, rear fog lights, rain sensors, white direction indicator lights, runflat tyres, and chrome plated double exhaust tailpipe finisher. Moreover, the vehicle can be had in either silver vent spoke, 17-inch alloy wheels or black net spoke, 17-inch alloy wheels.
            </p>
            <p class="collapse" id="pcollapse">The MINI Clubman Cooper S can be had in two interior surface colour options like grey checkered and piano black. The standard feature list includes electric sear adjustment in front with memory function for driver, automatic AC, MINI driving modes, Bluetooth hands-free, lights package, centre armrest, multifunction steering wheel, smokers package, sports seats, velour floor mats and storage compartment package.
            </p>
             <p class="collapse" id="pcollapse">In terms of safety, the vehicle offers front airbags, brake assist, crash sensor, ABS, runflat indicator, dynamic stability control, three-point seat belts, cornering brake control, and warning triangle with first-aid kit.
            </p>
            <span id="Images"></span>
             <b class="btn-link " id="readmore" data-toggle="collapse" data-target="#pcollapse">
                  Read More
                </b>
            </div>
        </div>
        
         <div class="row  mt-4 mb-0">
             <div class="col-12">
                 <h3>Mini Clubman Images</h3>
             </div>
         </div>
        <div class="row gallarys border">
            <div class="col-lg-4 col-md-6 col-6 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-1.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-1.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-2.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-2.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-3.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-3.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-6 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-4.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-4.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-6 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-5.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-5.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-6.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-6.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6 p-2 mt-2">
                <a href="images/Mini-Clubman/Mini-Clubman-7.jpg">
                    <img src="images/Mini-Clubman/Mini-Clubman-7.jpg" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
    <script type="text/javascript">
    $(document).ready(function(){
       $(".gallarys").magnificPopup({
           type:'image',
           delegate:'a',
           gallery:{
               enabled:true
           }
       }) 
    });
    </script>
    <div class="container-fluid mt-5" id="footer">
               <div class="row navbar bg-dark text-white">
                 <!-- <div class="col-12">
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
            </div>-->
</body>
</html>