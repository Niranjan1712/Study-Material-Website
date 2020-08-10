<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("sql110.epizy.com", "epiz_25699900", "bxXl1eFMJZM9DL", "epiz_25699900_users");
		$sql = "UPDATE `epiz_25699900_users`.`civil` SET `password` = '" . md5($_POST["password"]). "' WHERE `civil`.`username` = '" . $_GET["name"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
?>
<link href="demo-style.css" rel="stylesheet" type="text/css">
<script>
function validate_password_reset() {
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	return true;
}
</script>

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
                            <a class="navbar-brand" href="../index.html">
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
                                        <a  href="../index.html">HOME</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="cse_login.html">CSE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="ece_login.html">ECE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="it_login.html">IT</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="eee_login.html">EEE</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="civil_login.html">CIVIL</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a  href="mech_login.html">MECH</a>
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


<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
<h1>Reset Password</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="Password">Password</label></div>
		<div>
		<input type="password" name="password" id="password" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><label for="email">Confirm Password</label></div>
		<div><input type="password" name="confirm_password" id="confirm_password" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Reset Password" class="form-submit-button"></div>
	</div>	
</form>
				