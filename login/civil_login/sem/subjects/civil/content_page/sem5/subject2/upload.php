<?php
include_once 'dbconfig.php';
session_start();
$roll_number = $_SESSION["roll_number"];

if(isset($_POST['btn-upload']))
{ 
  $filename = mysqli_real_escape_string($conn, $_POST['filename']);  
  $upload_type = mysqli_real_escape_string($conn, $_POST['upload_type']); 
  $upload_type_lower = strtolower($upload_type);

  if (empty($upload_type)) { 
      
                      session_start();
                $_SESSION["upload_type"]="MESSAGE OF UPLOAD TYPE";
                header("location: content_page.php");
                     
   }
  

$file = $_FILES['file']['name'];

  if($file != '')
    {
      $ext = pathinfo($file, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'ppt', 'pptx', 'xlsx', 'xls', 'docx', 'png', 'jpg', 'jpeg'];

      if (in_array($ext, $allowed))
        {

              //$filename = mysqli_real_escape_string($conn, $_POST['filename']);

             $file = $_FILES['file']['name'];
                $file_loc = $_FILES['file']['tmp_name'];
             $file_size = $_FILES['file']['size'];
             $file_type = $_FILES['file']['type'];
             $folder="uploads/";

             
             // new file size in KB
             $new_size = $file_size/1024;  
             // new file size in KB
             
             // make file name in lower case
             $new_file_name = strtolower($file);
             // make file name in lower case
             
             $final_file=str_replace(' ','-',$new_file_name);
             //$fun = substr_replace($final_file , 'pdf', strrpos($file , '.') +1);
 
                     if(move_uploaded_file($file_loc,$folder.$final_file))
                     {
                      $sql="INSERT INTO subject2(file_name,file,size,upload_type,roll_number) VALUES('$filename','$final_file','$new_size','$upload_type_lower','$roll_number')";
                      mysqli_query($conn,$sql);
                     
                      session_start();
                $_SESSION["upload"]="MESSAGE OF UPLOAD";
                header("location: content_page.php");
                     }
                     else
                     {
                      session_start();
                $_SESSION["upload_err"]="MESSAGE OF UPLOAD ERRO";
                header("location: content_page.php");
                      
                      }



              }
              else{
                session_start();
                $_SESSION["file_type"]="MESSAGE OF FILE TYPE";
                header("location: content_page.php");
                
              }
            }
      else{
        session_start();
                $_SESSION["file_select"]="MESSAGE OF FILE SELECT";
                header("location: content_page.php");
         
              }
  }

?>

