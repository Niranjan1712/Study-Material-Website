<?php 

session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../civil_login.php");
    exit;
}
  ?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Home | Website For Academic requirements</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/semstyle.css">

    <link rel="stylesheet" href="assets/css/search.css">


    <style type="text/css">
   
@media only screen and (max-width: 999px) {
  .for_big {
    display: none;
  }
}
@media only screen and (min-width: 1000px) {
  .for_small {
    display: none;
  }
  }
  .single-features {
  padding: 30px 20px 10px;
  background-color: #f4f6f7; }

  .single-features_sem {
  padding: 0px 20px 10px;
  background-color: #f4f6f7; }

  .text {
    font-size: 14px;
    line-height: 20px;
    color: #121212;
    margin-top: 16px; }

    
</style>


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../../../../../index.php">
                                <img src="assets/images/logo.svg" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                	<li class="hide">
                                    	<!-- Start Search box -->
									<div class="searchBox nav-item">
								        <input style="text-align: center; width: 88%" class="searchInput"type="text" name="" placeholder="Search ">
								            <button class="searchButton" href="#">
								              <img src="assets/images/search.png">
								            </button>
								    </div>
								<!-- End Search Box  -->
								
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../index.php">HOME</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../cse_login/cse_login.php">CSE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../ece_login/ece_login.php">ECE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../it_login/it_login.php">IT</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../eee_login/eee_login.php">EEE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../civil_login/civil_login.php">CIVIL</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../mech_login/mech_login.php">MECH</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>



                            

                            <div style="padding: 0px; margin: 0px;" class=" navbar navbar-expand-lg" >
                                <!-- Start Search box -->
 
<div class="">
  <a class="  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/user.png">
    
 <span class="for_big"><?php echo htmlspecialchars($_SESSION["roll_number"]); ?></span></a>

  <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item for_small" href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
    <a class="dropdown-item"><?php echo htmlspecialchars($_SESSION["first_name"]); ?> <?php echo htmlspecialchars($_SESSION["last_name"]); ?></a>
    <a class="dropdown-item"><?php echo htmlspecialchars($_SESSION["roll_number"]); ?></a>
    <a class="dropdown-item"><?php echo htmlspecialchars($_SESSION["dept_name"]); ?></a>
    <a class="dropdown-item" href="../../../reset_password.php">Reset Password</a>
    <button style="border-radius: 50px;" type="submit" name="btn-upload" class="btn btn-primary"><a style="color: white;" href="../../../logout.php">Logout Now</a></button>
  </div>
</div>



                                <!-- End Search Box  -->
                            </div>


                           <!-- <div class="navbar-social d-none d-sm-flex align-items-center">
                                <span>FOLLOW US</span>
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>                                  
                                </ul>
                            </div>-->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        
    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    

    <!--====== SERVICES PART ENDS ======-->
    <?php  
    /* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql110.epizy.com');
define('DB_USERNAME', 'epiz_25699900');
define('DB_PASSWORD', 'bxXl1eFMJZM9DL');
define('DB_NAME', 'epiz_25699900_subjects');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $sql = "SELECT * FROM all_subjects WHERE dept_name ='Civil Department' AND semester = 'Semester-V'";
    $result =  mysqli_query($link, $sql);
$row =mysqli_fetch_assoc($result);
//echo $row['option_value'];

    ?>

    
    
         <!--====== FEATRES TWO PART START ======-->
    <section style="padding-bottom: 50px; padding-top: 150px;" id="services">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Civil Semester-V</h3>
                        <p class="text">Select the subject from the following option mention below to get the detailed information.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div style="margin-top: 50px;" class="card-deck">
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject1/content_page.php"><?php echo $row['subject1'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject1/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject2/content_page.php"><?php echo $row['subject2'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject2/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject3/content_page.php"><?php echo $row['subject3'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject3/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
            </div>

            <div style="margin-top: 30px;" class="card-deck">
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject4/content_page.php"><?php echo $row['subject4'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject4/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject5/content_page.php"><?php echo $row['subject5'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject5/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                <div class="card">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject6/content_page.php"><?php echo $row['subject6'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject6/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
            </div>


            
            <div style="margin-top: 30px;" class="card-deck justify-content-center">
                <div style="background-color: #f4f6f7;" class="card col-lg-4 col-md-7 col-sm-9">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject7/content_page.php"><?php echo $row['subject7'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px; background-color: transparent;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject7/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                <div style="background-color: #f4f6f7;" class="card col-lg-4 col-md-7 col-sm-9">
                    <div  class="single-features text-center card-body">
                        <div class="features-title-icon  justify-content-between">
                            <h4 class="features-title text-center"><a href="content_page/sem5/subject8/content_page.php"><?php echo $row['subject8'];?></a></h4>
                        </div>
                    </div>
                        <div class="single-features_sem features-content text-center">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        </div>
                    
                        <div style="height: 80px; background-color: transparent;" class="card-footer border-0 text-center ">
                            <a href="content_page/sem5/subject8/content_page.php"><button style="border-radius: 50px; color: white;" type="button" class="btn btn-primary features-btn">EXPLORE MORE <img src="assets/images/arrow.png"></button></a>
                        </div>
                </div>
                
            </div>
        </div>



  
        
    </section>

    

    <!--====== FEATRES TWO PART ENDS ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                           
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Team</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Services</h6>
                            <ul>
                                <li><a href="#">Text Books</a></li>
                                <li><a href="#">Notes</a></li>
                                <li><a href="#">Assignment</a></li>
                                
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                            	 <li><a href="#">FAQ</a></li>
                                <li><a href="#contact">Support Center</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="footer-newsletter">
                            <h6 class="footer-title">Subscribe Newsletter</h6>
                            <div class="newsletter">
                                <form action="#">
                                    <input type="text" placeholder="Your Email">
                                    <button type="submit"><i class="lni-angle-double-right"></i></button>
                                </form>
                            </div>
                            <p class="text">Subscribe newsletter to stay upto date. We don’t send spam.</p>
                        </div> <!-- footer newsletter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">© 2020 Copyright:  <a rel="nofollow" href=""></a> <a el="nofollow" href=""></a></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->









    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
