<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $first_name = $last_name = $roll_number = $password = $confirm_password = $email = $unique_id = "";
$username_err = $first_name_err = $last_name_err = $roll_number_err = $password_err = $confirm_password_err = $email_err = $unique_id_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM civil WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) > 0){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }


            // Validate roll number
    if(empty(trim($_POST["roll_number"]))){
        $roll_number_err = "Please enter your Roll number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM civil WHERE roll_number = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_roll_number);
            
            // Set parameters
            $param_roll_number = trim($_POST["roll_number"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) > 0){
                    $roll_number_err = "This Roll number is already taken.";
                } else{
                    $roll_number = strtoupper(trim($_POST["roll_number"]));
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Validate username
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter your email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM civil WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) > 0){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

            
        }
    }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    

    //getting values
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $unique_id = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 10);

    //first_name
    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter your First Name.";     
    }
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter your Last Name.";     
    }
    
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($first_name_err) && empty($last_name_err) && empty($roll_number_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO civil (unique_id, username, password, first_name, last_name, roll_number, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_unique_id, $param_username, $param_password, $param_first_name, $param_last_name, $param_roll_number, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_unique_id = $unique_id;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_roll_number = $roll_number;
            $param_email = $email;


            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                session_start();
                $_SESSION["register"]="MESSAGE OF REGISTER";
                header("location: civil_login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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

    <link rel="stylesheet" href="assets/css/search.css">


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../../index.php">
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
                                        <a  href="../../index.php">HOME</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../cse_login/cse_login.php">CSE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../ece_login/ece_login.php">ECE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../it_login/it_login.php">IT</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../eee_login/eee_login.php">EEE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../civil_login/civil_login.php">CIVIL</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="../mech_login/mech_login.php">MECH</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>



                            <div class="navbar-social d-none d-sm-flex align-items-center">
                           		<!-- Start Search box -->
									<div class="searchBox">
								        <input style="text-align: center;" class="searchInput"type="text" name="" placeholder="Search ">
								            <button class="searchButton" href="#">
								              <img src="assets/images/search.png">
								            </button>
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
    
    <!--====== CONTACT PART START ======-->

    <section style="margin-top:100px; " id="contact" class="contact-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title"> CIVIL Registration</h4>
                        <p class="text">You will be getting access to all the Academic requirements of your CIVIL Department.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="post" autocomplete="off" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12 tex">
                                    <div class="single-form form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" value="<?php echo $username; ?>" name="username" placeholder="Username" data-error="Username is required." required="required">
                                        <div class="help-block with-errors"><?php echo $username_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" value="<?php echo $first_name; ?>" name="first_name" placeholder="First name" data-error="First name is required." required="required">
                                        <div class="help-block with-errors"><?php echo $first_name_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" value="<?php echo $last_name; ?>" name="last_name" placeholder="Last name" data-error="Last name is required." required="required">
                                        <div class="help-block with-errors"><?php echo $last_name_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($roll_number_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="roll_number" placeholder="Roll number" data-error="Roll number is required." value="<?php echo $roll_number; ?>" required="required">
                                        <div class="help-block with-errors"><?php echo $roll_number_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="email" value="<?php echo $email; ?>" name="email" placeholder="Email" data-error="Email is register." required="required">
                                        <div class="help-block with-errors"><?php echo $email_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group ">
                                        <input style="border-radius: 50px;" class="text-center" type="password" name="password" placeholder="Password" data-error="Password is required." value="<?php echo $password; ?>" required="required">
                                        <div class="help-block with-errors"><?php echo $password_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="password" name="confirm_password" placeholder=" Password" data-error="Valid email is required." value="<?php echo $confirm_password; ?>" required="required">
                                        <div class="help-block with-errors"><?php echo $confirm_password_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                
                                
                                
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" value="submit" class="main-btn">Register Now</button>

                                        <p style="margin-top: 5px;">Already have an account? <a href="civil_login.php">Login now</a>.</p>

                                            

                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <!-- footer logo -->
                            
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
