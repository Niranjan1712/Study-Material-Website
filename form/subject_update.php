<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$dept_name = $semester = $subject1 = $subject2 = $subject3 = $subject4 = $subject5 = $subject6 = $subject7 = $subject8 = "";
$dept_name_err = $semester_err = $subject1_err = $subject2_err = $subject3_err = $subject4_err = $subject5_err = $subject6_err = $subject7_err = $subject8_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    


            // Validate roll number
    

            // Validate username
    

            // Close statement
           
    

    //getting values
    $dept_name = trim($_POST["dept_name"]);
    $semester = trim($_POST["semester"]);
    $subject1 = trim($_POST["subject1"]);
    $subject2 = trim($_POST["subject2"]);
    $subject3 = trim($_POST["subject3"]);
    $subject4 = trim($_POST["subject4"]);
    $subject5 = trim($_POST["subject5"]);
    $subject6 = trim($_POST["subject6"]);
    $subject7 = trim($_POST["subject7"]);
    $subject8 = trim($_POST["subject8"]);

    //first_name
    if(empty(trim($_POST["dept_name"]))){
        $dept_name_err = "Please enter Department name";     
    }
    if(empty(trim($_POST["semester"]))){
        $semester_err = "Please enter Semester";     
    }
    if(empty(trim($_POST["subject1"]))){
        $semester_err = "Please enter Subject 1";     
    }
    if(empty(trim($_POST["subject2"]))){
        $semester_err = "Please enter Subject 2";     
    }
    if(empty(trim($_POST["subject3"]))){
        $semester_err = "Please enter Subject 3";     
    }
    if(empty(trim($_POST["subject4"]))){
        $semester_err = "Please enter Subject 4";     
    }
    if(empty(trim($_POST["subject5"]))){
        $semester_err = "Please enter Subject 5";     
    }
    if(empty(trim($_POST["subject6"]))){
        $semester_err = "Please enter Subject 6";     
    }
    if(empty(trim($_POST["subject7"]))){
        $semester_err = "Please enter Subject 7";     
    }
    if(empty(trim($_POST["subject8"]))){
        $semester_err = "Please enter Subject 8";     
    }
    
    // Validate password
   
    // Validate confirm password
   
    
    // Check input errors before inserting in database
    if(empty($dept_name_err) && empty($semester_err) && empty($subject1_err) && empty($subject2_err) && empty($subject3_err) && empty($subject4_err) && empty($subject5_err) && empty($subject6_err) && empty($subject7_err) && empty($subject7_err) && empty($subject8_err)){
        
        // Prepare an insert statement
        $sql = "UPDATE all_subjects SET subject1 = ?, subject2 = ?, subject3 = ?, subject4 = ?, subject5 = ?,subject6 = ?, subject7 = ?, subject8 = ? WHERE dept_name = ? AND semester = ?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_subject1, $param_subject2, $param_subject3, $param_subject4, $param_subject5, $param_subject6, $param_subject7, $param_subject8, $param_dept_name, $param_semester);
            
            // Set parameters
            $param_subject1 = $subject1;
            $param_subject2 = $subject2; 
            $param_subject3 = $subject3;
            $param_subject4 = $subject4;
            $param_subject5 = $subject5;
            $param_subject6 = $subject6;
            $param_subject7 = $subject7;
            $param_subject8 = $subject8;
            $param_dept_name = $dept_name;
            $param_semester = $semester;



            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                ?>
                <div style="margin-top: 120px;" class="" role="alert">
                       
                </div>
                <?php
                echo"<h6 class='alert alert-success text-center'>Subjects updated  successfully.</h6>";
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);


    if ($dept_name == 'Civil Department') {
    	
    	$database = array("epiz_25699900_civil_sem1", "epiz_25699900_civil_sem2", "epiz_25699900_civil_sem3", "epiz_25699900_civil_sem4", "epiz_25699900_civil_sem5", "epiz_25699900_civil_sem6", "epiz_25699900_civil_sem7", "epiz_25699900_civil_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }

    if ($dept_name == 'CSE Department') {
    	
    	$database = array("epiz_25699900_cse_sem1", "epiz_25699900_cse_sem2", "epiz_25699900_cse_sem3", "epiz_25699900_cse_sem4", "epiz_25699900_cse_sem5", "epiz_25699900_cse_sem6", "epiz_25699900_cse_sem7", "epiz_25699900_cse_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }
    if ($dept_name == 'ECE Department') {
    	
    	$database = array("epiz_25699900_ece_sem1", "epiz_25699900_ece_sem2", "epiz_25699900_ece_sem3", "epiz_25699900_ece_sem4", "epiz_25699900_ece_sem5", "epiz_25699900_ece_sem6", "epiz_25699900_ece_sem7", "epiz_25699900_ece_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }
    if ($dept_name == 'Mechanical Department') {
    	
    	$database = array("epiz_25699900_mech_sem1", "epiz_25699900_mech_sem2", "epiz_25699900_mech_sem3", "epiz_25699900_mech_sem4", "epiz_25699900_mech_sem5", "epiz_25699900_mech_sem6", "epiz_25699900_mech_sem7", "epiz_25699900_mech_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }
    if ($dept_name == 'IT Department') {
    	
    	$database = array("epiz_25699900_it_sem1", "epiz_25699900_it_sem2", "epiz_25699900_it_sem3", "epiz_25699900_it_sem4", "epiz_25699900_it_sem5", "epiz_25699900_it_sem6", "epiz_25699900_it_sem7", "epiz_25699900_it_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }
    if ($dept_name == 'EEE Department') {
    	
    	$database = array("epiz_25699900__eee_sem1", "epiz_25699900__eee_sem2", "epiz_25699900__eee_sem3", "epiz_25699900__eee_sem4", "epiz_25699900__eee_sem5", "epiz_25699900_eee_sem6", "epiz_25699900__eee_sem7", "epiz_25699900__eee_sem8");
    	$sem = array("Semester-I", "Semester-II", "Semester-III", "Semester-IV", "Semester-V", "Semester-VI", "Semester-VII", "Semester-VIII");

    	for ($i = 0; $i <= 7; $i++) {

    		if ($semester == $sem[$i]) {

    			$db = $database[$i];
			  $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, $db);
			  $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".$db."'";
			  $result = $connection->query($sql);
			  $tables = $result->fetch_all(MYSQLI_ASSOC);
			  foreach($tables as $table)
			  {
			      $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
			      $result = $connection->query($sql);
			  }
    		}
    
}
    }



  
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
                        <h4 class="title">Subject Update Form</h4>
                        <p class="text">You can update the subjects in any semester by filling the detailes below.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->


            	<?php
        
    if(isset($_SESSION["subject"]))
    {
        echo"<h6 class='alert alert-success text-center'>Subjects updated  successfully.</h6>";
        unset($_SESSION["subject"]);
    }
    
    

?>


            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="post" autocomplete="off" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6 tex">
                                    <div class=" text-center single-form form-group <?php echo (!empty($dept_name_err)) ? 'has-error' : ''; ?>">
	      								<select style="border-radius: 50px; height: 50px;" name="dept_name"  class="form-control text-center">
	        								<option selected>Select Department</option>
	        								<option>CSE Department</option>
	        								<option>ECE Department</option>
	        								<option>IT Department</option>
	        								<option>EEE Department</option>
	        								<option>Civil Department</option>
	        								<option>Mechanical Department</option>

	      								</select>
	      								<div class="help-block with-errors"><?php echo $dept_name_err; ?></div>
    								</div>
								</div>
                                <div class="col-md-6 tex">
                                    <div class=" text-center single-form form-group <?php echo (!empty($semester_err)) ? 'has-error' : ''; ?>">
	      								<select style="border-radius: 50px; height: 50px;" name="semester"   class="form-control text-center">
	        								<option selected>Select Semester</option>
	        								<option>Semester-I</option>
	        								<option>Semester-II</option>
	        								<option>Semester-III</option>
	        								<option>Semester-IV</option>
	        								<option>Semester-V</option>
	        								<option>Semester-VI</option>
	        								<option>Semester-VII</option>
	        								<option>Semester-VIII</option>

	      								</select>
	      								<div class="help-block with-errors"><?php echo $semester_err; ?></div>
    								</div>
								</div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject1_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text"  name="subject1" placeholder="Subject 1" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"><?php echo $subject1_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject2_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject2" placeholder="Subject 2" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject2_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject3_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject3" placeholder="Subject 3" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject3_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject4_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject4" placeholder="Subject 4" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject4_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject5_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject5" placeholder="Subject 5" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject5_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject6_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject6" placeholder="Subject 6" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject6_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject7_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject7" placeholder="Subject 7" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject7_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group <?php echo (!empty($subject8_err)) ? 'has-error' : ''; ?>">
                                        <input style="border-radius: 50px;" class="text-center" type="text" name="subject8" placeholder="Subject 8" data-error="Subject is required."  required="required">
                                        <div class="help-block with-errors"><?php echo $subject8_err; ?></div>
                                    </div> <!-- single form -->
                                </div>
                                
                                
                                
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" value="submit" class="main-btn">Update Now</button>

                                        

                                            

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
