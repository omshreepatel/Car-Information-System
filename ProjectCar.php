<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/Projectcar.css">
    <link rel="stylesheet" href="Maruti-Suzuki-Swift.html">

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
            <!-- <a href="#vehicles">vehicles</a> -->
        </nav>

        <div id="login-btn">
            <button class="btn">login</button>
            <i class="far fa-user"></i>
        </div>
    </header>
    
        <form action="signup_user.php" method="post">
    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

            <form method="post" action="login_user.php">
        <div class="cont">
            <div class="form sign-in">
              <h2>Welcome</h2>
              <label>
                <span>Email</span>
                <input type="email"  name="user_email" />
              </label>
              <label>
                <span>Password</span>
                <input type="password" name="user_pass" />
              </label>
              <p class="forgot-pass">Forgot password?</p>
              <button type="submit" name="sign_in" class="submit">Sign In</button>
              </form>
          
            </div>
            <div class="sub-cont">
              <div class="img">
                <div class="img__text m--up">
                  <h3>Dont have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
          
                  <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                  <span class="m--up">Sign Up</span>
                  <span class="m--in">Sign In</span>
                </div>
              </div>
              <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                  <span>Name</span>
                  <input type="text" name="user_name" />
                </label>
                <label>
                  <span>Email</span>
                  <input type="email" name="user_email" />
                </label>
                <label>
                  <span>Password</span>
                  <input type="password" name="user_pass" />
                </label>
                <button type="submit" name="sign_up" class="submit">Sign Up</button>
              </div>
            </div>
          </div>

        </form>
    </div>
    <section class="home" id="home">

        <!-- <h3 data-speed="-2" class="home-parallax">find your car</h3> -->
        <h2 class="heading">Find your car</h2>
        <form class="vehicles-slider" action="NewCarLaunches.php" method="get" style="margin:auto;max-width:300px">
            <div id="login-btn">
                <button class="btn">Explore Cars</button>
                <i class="far fa-user"></i>
            </div>
        </form>

    </section>  
         
 


        <section class="vehicles" id="vehicles">

            <h1 class="heading"> popular <span>vehicles</span> </h1>
            <!-- <h2>Popular <span>Vehicles</span></h2>-->
             
            <div class="swiper vehicles-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/vehicle-1.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>NEW CARS</b></a>
                    <div class="dropdown-menu bg-light text-center">
                        <a href="NewCarLaunches.html" class="dropdown-item"><b>NewCar Launches</b></a>
                    </div>
                    </li>
                </ul> -->
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/vehicle-2.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                new
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/vehicle-3.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                new
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/vehicle-4.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                new
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/vehicle-5.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                new
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/vehicle-6.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="price"> <span>price : </span> $62,000/- </div>
                            <p>
                                new
                                <span class="fas fa-circle"></span> 2021
                                <span class="fas fa-circle"></span> automatic
                                <span class="fas fa-circle"></span> petrol
                                <span class="fas fa-circle"></span> 183mph
                            </p>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="services" id="services">

            <!-- <h1 class="heading"> our <span>services</span> </h1> -->
            <h2>Our<span>Services</span></h2>

            <div class="box-container">

                <div class="box">
                    <i class="fas fa-headset"></i>
                    <h3>24/7 support</h3>
                    <p></p>
                    <a href="#" class="btn"> read more</a>
                </div>

            </div>

        </section>

        <section class="featured" id="featured">

            <!-- <h1 class="heading"> <span>featured</span> cars </h1> -->
            <h2> <span>featured</span></h2>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/car-1.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-2.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-3.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/car-4.png" alt="">
                        <div class="content">
                            <h3>new model</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$55,000/-</div>
                            <a href="#" class="btn">check out</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

            </div>

            <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="newsletter">

            <h3>subscribe for latest updates</h3>
            <p>Get Update Of Latest Cars & Features</p>

            <form action="subscribe.php" method="post">
                <input type="email" name="subsemail" placeholder="enter your email">
                <!--<input type="submit" value="subscribe"> -->
                <button type="submit" name="subs" class="btn">Subscribe </button>
            </form>

        </section>

        <section class="reviews" id="reviews">

            <h1 class="heading"> client's <span>review</span> </h1> 
            <h2>Client's<span>Review</span></h2>

            <div class="swiper review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/pic-1.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-2.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-3.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-4.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-5.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-6.png" alt="">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium
                                iusto id autem possimus assumenda at ut saepe.</p>
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section class="contact" id="contact">

            <!-- <h1 class="heading"><span>contact</span> us</h1> -->
            <h2> <span>Contact</span></h2>

            <div class="row">

                <!-- <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2s%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy"></iframe> -->

                <form action="userinfo.php" method="post">
                    <h2>get in touch</h2>
                    <input type="text" placeholder="your name" name="name" class="box">
                    <input type="email" placeholder="your email" name="email" class="box">
                    <input type="textarea" placeholder="subject" name="subject" class="box">
                    <textarea placeholder="your message" class="box" name="comment" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn">Send message </button>
                </form>

            </div>

        </section>

        <section class="footer" id="footer">

            <div class="box-container">

                <!-- <div class="box">
            <h2>our branches</h2>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        </div> -->

                <div class="box">
                    <h2>quick links</h2>
                    <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                </div>

                <div class="box">
                    <h2>contact info</h2>
                    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> wheelsInfo@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Indore, india - 452001 </a>
                </div>

                <!-- <div class="box">
            <h2>contact info</h2>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div> -->
        </section>

</body>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="js/Projectcarscript.js"></script>

</html>