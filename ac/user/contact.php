<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>furniture - Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="./contact.css">

</head>
<body><nav id="main-menu">
    <ul class="nav-bar">
         <li class="nav-button-home"><a href="./index.php">Home</a></li>
         <!-- <li class="nav-button-services"><a href="#">Services</a></li> -->
         <li class="nav-button-products"><a href="./products.php">Products</a></li>
    </ul>
</nav>
<!-- partial:index.partial.html -->
<section class="contact-page-section">
      <div class="container">
          <div class="sec-title">
             
                <h2>Let's Get in Touch.</h2>
            </div>
            <div class="inner-container">
              <div class="row clearfix">
                
                  <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="name" value="" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Phone" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                            
                        </div>
                    </div>
                    
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12" style = "background: #C7A98F;">
                      <div class="inner-column">
                          <h2>Contact Info</h2>
                            <ul class="list-info">
                              <li><i class="fas fa-globe"></i>123 lorem ispum Abc, Street Chandigarh.</li>
                                <li><i class="far fa-envelope"></i>example@test</li>
                                <li><i class="fas fa-phone"></i>1-234-567-890 <br> 1-234-567-890</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</html>
