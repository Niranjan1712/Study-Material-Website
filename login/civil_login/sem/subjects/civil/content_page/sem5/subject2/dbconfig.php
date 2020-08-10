<?php
$dbhost = "sql110.epizy.com";
$dbuser = "epiz_25699900";
$dbpass = "bxXl1eFMJZM9DL";
$dbname = "epiz_25699900_civil_sem5";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
//mysql_select_db($dbname) or die('database selection problem');
?>