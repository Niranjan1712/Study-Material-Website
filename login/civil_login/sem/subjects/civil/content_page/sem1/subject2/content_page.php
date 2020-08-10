<?php
include_once 'dbconfig.php';

session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../../../../../civil_login/civil_login.php");
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
    

    <!--====== Slick css ======-->
   

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <link rel="stylesheet" href="assets/css/search.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">

<style type="text/css">
    ::-webkit-file-upload-button {
  background:;
  color: black;
  border-radius: 50px;
  padding:4px;
  padding-left: 20px;
  padding-right: 20px;
  
}
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
                            <a class="navbar-brand" href="../../../../../../../../index.php">
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
                                        <a  href="../../../../../../../../index.php">HOME</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../cse_login/cse_login.php">CSE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../ece_login/ece_login.php">ECE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../it_login/it_login.php">IT</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../eee_login/eee_login.php">EEE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../civil_login/civil_login.php">CIVIL</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../../../../../../../mech_login/mech_login.php">MECH</a>
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
    <a class="dropdown-item" href="../../../../../../../civil_login/reset_password.php">Reset Password</a>
    <button style="border-radius: 50px;" type="submit" name="btn-upload" class="btn btn-primary"><a style="color: white;" href="../../../../../../../civil_login/logout.php">Logout Now</a></button>
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

    
    
     <!--====== CALL TO ACTION PART START ======-->


   <!-- <section style="margin-top: 100px;" id="" class="call-to-action">
        
        <div class="container-fluid text-center">
            <div class="row justify-content-middle">
                <div class="col-lg-11">
                    <div class="call-action-content text-center">
                        <h2 class="call-title">CSE Login</h2>
                        <p class="text">Subscribe us for the latest updates which will help you in preparing for your examination</p>

                        <div class="call-newsletter">
                            <i class="lni-envelope"></i>
                            <input type="text" placeholder="example@email.com">
                            <button type="submit">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>-->

    <!--====== CALL TO ACTION PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->




    <section style="margin-top: 60px;" id="portfolio" class="portfolio-area">

        <div class="container">

        	<div class="ldBar"></div>
        	


            <?php
                        if(isset($_SESSION["upload"]))
    {
        echo"<h6 class='alert alert-success text-center'>File successfully uploaded.</h6>";
        unset($_SESSION["upload"]);
    }
        if(isset($_SESSION["upload_err"]))
    {
        echo"<h6 class='alert alert-danger text-center'>Error while uploading file</h6>";
        unset($_SESSION["upload_err"]);
    }
    if(isset($_SESSION["upload_type"]))
    {
        echo"<h6 class='alert alert-danger text-center'>Please Select upload type !</h6>";
        unset($_SESSION["upload_type"]);
    }
    if(isset($_SESSION["file_type"]))
    {
        echo"<h6 class='alert alert-danger text-center'>Upload failed!  Please upload only pdf, .txt, .doc, .docx, .png, .jpg, .jpeg, .ppt, .pptx, .xlsx, .xls files only !</h6>";
        unset($_SESSION["file_type"]);
    }
    if(isset($_SESSION["file_select"]))
    {
        echo"<h6 class='alert alert-danger text-center'>Please Select your file before uploading!</h6>";
        unset($_SESSION["file_select"]);
    }
    ?>
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">

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
    $sql = "SELECT subject2 FROM all_subjects WHERE dept_name ='Civil Department' AND semester = 'Semester-I'";
    $result =  mysqli_query($link, $sql);
$row =mysqli_fetch_assoc($result);
//echo $row['option_value'];

    ?>
                        
                        <h3 style="font-weight: 600;" class="title"><?php echo $row['subject2'];?></h3>
                        <p class="text">Here you will find detailed instructions of your sebject in the options provided below. </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->

<form action="upload.php" method="post" enctype="multipart/form-data" class="for_big">
  <div class="row">
    <div class="col">
<div style="border-radius: 50px; padding: 0px;" class="form-control">
    <input  type="file" name="file" class="form-control-file custom-file-upload" >
  </div>
  </div>
    <div class="col">
      <input style="border-radius: 50px;"  type="text" name="filename" class="form-control text-center" placeholder="Enter File Name">
    </div>
     <div class="col text-center">
      <select style="border-radius: 50px;" name="upload_type" id="inputState" class="form-control text-center">
        <option style="text-align: center;" selected>Choose Upload Type</option>
        <option>Text Book</option>
        <option>Notes</option>
        <option>Assignments</option>
        <option>Important Questions</option>


      </select>
    </div>
    <button style="border-radius: 50px;" type="submit" name="btn-upload"  class="btn btn-primary" onclick="move()">Upload Now</button>
  </div>
</form>

<form action="upload.php" method="post" enctype="multipart/form-data" class="for_small">
  
    <div  class="col">
<div style="border-radius: 50px; padding: 0px;" class="form-control">
    <input  type="file" name="file" class="form-control-file custom-file-upload" >
  </div>
  
</div>
    <div style="padding-top: 10px;"  class="col">
      <input style="border-radius: 50px;"  type="text" name="filename" class="form-control text-center" placeholder="Enter File Name">
    </div>

  <div style="padding-top: 10px;" class="form-group">
    
    <div class="col text-center">
      <select style="border-radius: 50px;" name="upload_type" id="inputState" class="form-control text-center">
        <option style="text-align: center;" selected>Choose Upload Type</option>
        <option>Text Book</option>
        <option>Notes</option>
        <option>Assignments</option>
        <option>Important Questions</option>


      </select>
    </div>
  </div>
  
  <div style="padding-top: 10px;" class="text-center">
  <button style="border-radius: 50px;" type="submit" name="btn-upload" class="btn btn-primary text-center">Upload Now</button>
  </div>
</form>


            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">ALL</li>
                            <li data-filter=".text">TEXT BOOKS</li>
                            <li data-filter=".notes">NOTES</li>
                            <li data-filter=".assignments">ASSIGNMENTS</li>
                            <li data-filter=".important">IMPORTANT QUESTIONS</li>
                
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div style="padding-top: 30px; " class="row grid text-center">

                <?php

 $sql="SELECT * FROM subject2";
 //$sql = "SELECT view_table.file_name,tbl_uploads.file,tbl_uploads.type,view_table.size FROM view_table, tbl_uploads WHERE view_table.size = tbl_uploads.size";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
    if ($row['upload_type'] == 'text book' ) {
        # code...
   
  ?>    
        <div class="col-lg-4 col-sm-6 <?php echo $row['class'] ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="">
                            <a href="uploads/<?php echo $row['file'] ?>"><img src="assets/images/textbook.png"></a>
                            
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="uploads/<?php echo $row['file'] ?>"><?php echo $row['file_name'] ?></a></h4>
                            
                            <p style="color: #5B2C6F;">Uploaded By: <?php echo $row['roll_number'] ?></p>
                            <a href="uploads/<?php echo $row['file'] ?>" download=""><button style="border-radius: 50px; color: white; margin-top: 10px;" type="button" class="btn btn-primary features-btn">Download Now</button></a>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
          
        
        <?php
    }
    elseif ($row['class'] == 'notes' ) {

        ?>    
        <div class="col-lg-4 col-sm-6 <?php echo $row['class'] ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="">
                            <a href="uploads/<?php echo $row['file'] ?>"><img src="assets/images/notes.png"></a>
                            
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="uploads/<?php echo $row['file'] ?>"><?php echo $row['file_name'] ?></a></h4>
                            <p style="color: #5B2C6F;">Uploaded By: <?php echo $row['roll_number'] ?></p>
                            <a href="uploads/<?php echo $row['file'] ?>" download=""><button style="border-radius: 50px; color: white; margin-top: 10px;" type="button" class="btn btn-primary features-btn">Download Now</button></a>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
          
        
        <?php
    }

    elseif ($row['class'] == 'assignments' ) {
        
        ?>    
        <div class="col-lg-4 col-sm-6 <?php echo $row['class'] ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="">
                            <a href="uploads/<?php echo $row['file'] ?>"><img src="assets/images/assignment.png"></a>
                            
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="uploads/<?php echo $row['file'] ?>"><?php echo $row['file_name'] ?></a></h4>
                            
                            <p style="color: #5B2C6F;">Uploaded By: <?php echo $row['roll_number'] ?></p>
                            <a href="uploads/<?php echo $row['file'] ?>" download=""><button style="border-radius: 50px; color: white; margin-top: 10px;" type="button" class="btn btn-primary features-btn">Download Now</button></a>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
          
        
        <?php
    }
    elseif($row['class'] == 'important questions') {
        
        ?>    
        <div class="col-lg-4 col-sm-6 <?php echo $row['class'] ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="">
                            <a href="uploads/<?php echo $row['file'] ?>"><img src="assets/images/question.png"></a>
                            
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="uploads/<?php echo $row['file'] ?>"><?php echo $row['file_name'] ?></a></h4>
                            <p style="color: #5B2C6F;">Uploaded By: <?php echo $row['roll_number'] ?></p>
                            <a href="uploads/<?php echo $row['file'] ?>" download=""><button style="border-radius: 50px; color: white; margin-top: 10px;" type="button" class="btn btn-primary features-btn">Download Now</button></a>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
          
        
        <?php
    }
 }
 ?>


                
             </div>  
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

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

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
     <script src="assets/js/main1.js"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>




</body>

</html>
