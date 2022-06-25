<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">                                    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/products.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <title>Welcome</title> -->
</head>
<body>

    <!-- <a href="logout.php">Logout</a> -->
<section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="images/icon.jpg"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto  ">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#top">HOME</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#about-us">ABOUT US</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#testimonials" >CLIENT SAY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#footer" >CONTACT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="simple-php-shopping-cart/index.php" >CART</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="home.php">LOGOUT</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </nav>
        </section>
        
        
        <section id="banner">
            <div class="container">
                <div class="row">

                    <?php echo "<h1>Welcome to our trends  " . $_SESSION['username'] . "</h1>"; ?>
                    <div class="col-md-6">
                        <p class="titleb">CITY TRENDS</p>
                        <ul>
                            <li>BEST IN THE BUSINESS</li>
                            <li>BEST PRICE WITH BEST OFFERS</li>
                            <li>STAY A WHILE AND ENJOY THE WONDER</li>  
                        </ul>
                        <p class="titleb">You can have anything you want in life if you dress for it</p>
                        <p style="margin-left: 380px;"><b>-Edith Head</b></p>
                    </div>
                    <div class="col-md-6 text-ceter" >
                        <img src="images/home2.png" class="img-fluid">
                    </div>
                </div>
            </div>
            <img src="images/wave1.png" class="bottom-img">
        </section>


        <section id="services">
            <div class="container text-center">
                <h1 class="title">WHAT WE DO ?</h1>
                <div class="row text-ceter">
                    <div class="col-md-4 services">
                        <img src="images/service1.png" class="service-img">
                        <h4>Growth of WONDERS</h4>
                        <p>We have grown in a constant flow through out our journey. We will travel with in your Growth</p>
                    </div>
                    <div class="col-md-4 services">
                        <img src="images/service2.png" class="service-img">
                        <h4>Online PAYMENTS</h4>
                        <p>We value your time very preciously. Online payments are available with us through this website.</p>
                    </div>
                    <div class="col-md-4 services">
                        <img src="images/service3.png" class="service-img">
                        <h4>HOME DELIVERY</h4>
                        <p>You make sure to order We make sure you to deliver beyond your expectation</p>
                    </div>
                </div>
                <!-- <button type="button" class="btn btn-primary">All services</button> -->
            </div>
        </section>


        <section id="about-us">
            <div class="container">
                <h1 class="title text-center">WHO WE ARE?</h1>
                <div class="row">
                    <div class="col-md-6 about-us">
                        <p class="about-title">Why we are different</p>
                        <ul>
                            <li>Since 2019</li>
                            <li>Sakthi Tower, Near Bus Stand, Sathyamangalam</li>
                            <li>DIFFERENT BRANDS WITH DIFFERENT MATERIAL</li>
                            <li>Believe Style and Stylist</li>
                                <!-- <li>Believe with honesty</li>
                                <li>Believe with honesty</li> -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img src="images/Vishnu.jpg" class="img-fluid">
                    </div>
                </div>
            </div>

        </section>


        <section id="testimonials">
            <div class="container">
                <h1 class="title text-center">WHAT CLIENT SAY ?</h1>
                <div class="row offset-1">
                    <div class="col-md-5 testimonials">
                        <p>My experience our this shop is beyond my expectation. I will recommend my friends to experience that. Prices are cheap and the available cloths are in good quality. There are lot of offers for the  first customer.</p>
                        <img src="images/raju.jpg">
                        <p class="details"><b>Prathish</b><br>Sathyamangalam</p>
                    </div>
                    <div class="col-md-5 testimonials">
                        <p>My experience our this shop is beyond my expectation. I will recommend my friends to experience that. Prices are cheap and the available cloths are in good quality. There are lot of offers for the  first customer.</p>
                        <img src="images/raju.jpg">
                        <p class="details"><b>Raju</b><br>Erode</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="product">
            <div>
                <center><h1>For <span class="colored-word">Her</span></h1></center>
                <center><hr class="products-hr"></center>
                <br><br>
        
                <div class="kurti">
                  <img src="images/products-img/women/kurti1.png" id="AKS  Kurta with Plazzzo & Dupatta || Rs.1799" onclick="add(this.id)">
                  
                  <img src="images/products-img/women/kurti2.png" id="Nayo Women Solid Kurta with Trouser || Rs.1649"" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/kurti3.png" id="AKS Printed Staight Kurta || Rs.659" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/kurti4.png" id="Fabindia Slim Fit Straight Kurta || Rs.1990" alt="" onclick="add(this.id)">
                </div> 
                <div class="western">
                  <img src="images/products-img/women/western1.png"  id="Ives Solid Shirt Style Top || Rs.549" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/western2.png"  id="Style Quotient Solid Top || Rs.554" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/western3.png"  id="HERE&NOW Printed A-Line Top || Rs.549" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/western4.png"  id="SASSAFRAS Ruffled Shirt Style Top || Rs. 549" alt="" onclick="add(this.id)">
                </div>
                <div class="g-shoes">
                  <img src="images/products-img/women/g-shoe1.png"  id=" PUMA Women LQDCell || Rs.6999" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/g-shoe2.png"  id="ADIDAS Women Ultraboost19 Running || Rs.11899" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/g-shoe3.png"  id="HRX Womwn Abslute Run  || Rs.1549" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/g-shoe4.png"  id="Skercher Women GO RUN  || Rs.3249" alt="" onclick="add(this.id)">
                </div>
                <div class="heels">
                  <img src="images/products-img/women/heels1.png"  id="Shetopia Women Heels || Rs.499" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/heels2.png"  id="ZAPATOZ Women Heeled Boots || Rs.527" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/heels3.png"  id="Allen Solly Women Solid Wedged || Rs.2499" alt="" onclick="add(this.id)">
                  <img src="images/products-img/women/heels4.png"  id="Shoetopia Women Heels || Rs.499" alt="" onclick="add(this.id)">
                </div>
                <br>
                <center>
                <div class="col-md-4 footer-box">
                    <button style=" width: 200px; height: 50px;" onClick="location.href='simple-php-shopping-cart/index.php'" type="button" class="btn btn-primary">SHOP NOW</button>

                </div>
        

                </center>
                <br><br>
                <center><h1>For <span class="colored-word">Him</span></h1></center>
                <center><hr class="products-hr"></center>
                <br><br><br>
        
                <div class="shirts">
                  <img src="images/products-img/men/shirt1.png"  id="Difference of Opinion Printed Shirt || Rs.449" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shirt2.png"  id="Moda Rapido Printed Round Neck T-shirt || Rs.486" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shirt3.png"  id="DILLINGER Colourblocked Round Neck T-shirt || Rs.404" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shirt4.png"  id="Roadster T-shirt with Shoulder patch || Rs.519" alt="" onclick="add(this.id)">
                </div>
                <div class="jeans">
                  <img src="images/products-img/men/jeans1.png"  id="HIGHLANDER Men Slim Fit Jeans || Rs.874" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/jeans2.png"  id="Roadster Men Super Skinny Fit Jeans || Rs.1199" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/jeans3.png"  id="Calvin Klein Jeans Mean Slim Straight Jeans || Rs.9599" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/jeans4.png"  id="LOCOMOTIVE Mean Slim Fit Jeans || Rs.999" alt="" onclick="add(this.id)">
                </div>
                <div class="joggers">
                  <img src="images/products-img/men/joggers1.png"  id="HRX Men Solid Joggers || Rs.934" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/joggers1.png"  id="HRX Men Solid Joggers || Rs.934" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/joggers1.png"  id="HRX Men Solid Joggers || Rs.934" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/joggers1.png"  id="HRX Men Solid Joggers || Rs.934" alt="" onclick="add(this.id)">
                </div>
                <div class="shoes">
                  <img src="images/products-img/men/shoe1.png"  id="PUMA Men Clasp IDP Sneakers || Rs.1304" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shoe2.png"  id="Levis Men Sneakers || Rs.1169" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shoe3.png"  id="Mactree Men Sneakers || Rs.679" alt="" onclick="add(this.id)">
                  <img src="images/products-img/men/shoe4.png"  id="HRX Men Pro Sneakers || Rs.1699" alt="" onclick="add(this.id)">
                </div><br>
                <br>
                <center>
                <div class="col-md-4 footer-box">
                    <button style=" width: 200px; height: 50px;" onClick="location.href='simple-php-shopping-cart/index.php'" type="button" class="btn btn-primary">SHOP NOW</button>

                </div>
        

                </center>
               <br><br>
        </section>

        <section id="social-media">
            <div class="container text-center">
                <p>FIND US ON SOCIAL MEDIA</p>
                <div class="social-icons">
                    <a href="#"><img src="images/facebook-icon.png"></a>
                    <a href="#"><img src="images/instagram-icon.png"></a>
                    <a href="#"><img src="images/twitter-icon.png"></a>
                    <a href="#"><img src="images/whatsapp-icon.png"></a>
                </div>
            </div>
        </section>
        

        <section id="footer">
            <img src="images/wave2.png" class="footer-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <img src="images/icon.jpg">
                        <p>See how your purchase has purpose and gives more good day and have fun</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>CONTACT US</b></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Sakthi Tower, Near Bus Stand, Sathyamangalam</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+91 6382519268</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>vishnu@gmail.com</p>
                        

                    </div>
                    <div class="col-md-4 footer-box">
                        <input type="email" class="form-control" placeholder="Enter your review here">
                        <button type="button" class="btn btn-primary">SEND MAIL</button>

                    </div>
                </div>
                <hr>
                <center><p class="copyright">Website crafted by BV and RR</p></center>
            </div>
        </section>


        <script src="smooth-scroll.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
    
</body>
</html>