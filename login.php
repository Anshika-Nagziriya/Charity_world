<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Charity World</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

  <!-- header-start -->
  <header>
      <div class="header-area ">
          <div class="header-top_area">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-xl-6 col-md-12 col-lg-8">
                          <div class="short_contact_list">
                              <ul>
                                <li><a href="#"> <i class="fa fa-phone"></i> +91 9897654321</a></li>
                                <li><a href="#"> <i class="fa fa-envelope"></i>abc@gmail.com</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-xl-6 col-md-6 col-lg-4">
                          <div class="social_media_links d-none d-lg-block">
                              <a href="#">
                                  <i class="fa fa-facebook"></i>
                              </a>
                              <a href="#">
                                  <i class="fa fa-pinterest-p"></i>
                              </a>
                              <a href="#">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <a href="#">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="sticky-header" class="main-header-area">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <div class="col-xl-3 col-lg-3">
                          <div class="logo">
                              <a href="index.html">
                                  <img src="img/logo.jpg" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-xl-9 col-lg-9">
                          <div class="main-menu">
                              <nav>
                                  <ul id="navigation">
                                      <li><a href="index.html">home</a></li>
                                      <li><a href="About.html">About</a></li>
                                      <li><a href="login.php">Login</a></li>

                                              <li><a href="register.php">Register</a></li>

                                      <li><a href="contact.html">Contact</a></li>
                                  </ul>
                              </nav>
                              <div class="Appointment">
                                  <div class="book_btn d-none d-lg-block">
                                      <a data-scroll-nav='1' href="#">Make a Donatation</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header-end -->

<div class="container">
<div class="login-box">
  <div class="row">
    <div class="col-md-6 ">
      <h2>login here</h2>
      <form action="validation.php" method="post">
        <div class="from-group">
        <!--  <label>username</label>
          <input type="text"name="user" class="form-control" required>
        </div>-->
        <div class="form-group">
        <label for="firstName"><b> First Name</b></label>
        <input type="text"  class="form-control" placeholder="Enter First Name" class="form-control" id ="firstName" name="firstName" required/>
      </div>
 <br>
        <div class="form-group">
          <label for="password"><b>Password</b></label>
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <!--<label>password </label>
          <input type="password"name="password" class="form-control" required>-->
        </div>
        <button type="submit" class="btn btn-primary">login</button>

      </form>
    </div>



  </div>
</div >
</div>

<div data-scroll-index='1' class="make_donation_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Make a Donation</span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="#" class="donation_form">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="single_amount">
                                <div class="input_field">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="single_amount">
                               <div class="fixed_donat d-flex align-items-center justify-content-between">
                                   <div class="select_prise">
                                       <h4>Select Amount:</h4>
                                   </div>
                                    <div class="single_doonate">
                                        <input type="radio" id="blns_1" name="radio-group" checked>
                                        <label for="blns_1">10</label>
                                    </div>
                                    <div class="single_doonate">
                                        <input type="radio" id="blns_2" name="radio-group" checked>
                                        <label for="blns_2">30</label>
                                    </div>
                                    <div class="single_doonate">
                                        <input type="radio" id="Other" name="radio-group" checked>
                                        <label for="Other">Other</label>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="donate_now_btn text-center">
                    <a href="Donate.html" class="boxed-btn4">Donate Now</a>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
