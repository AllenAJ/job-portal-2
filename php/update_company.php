<?php
require_once('connection.php');
session_start();
$companyname= $companydesc= $companywebsite= $companylocation= $companyimage= $username="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=$_SESSION['cust_user'];
    $companyname=test_input($_POST["Comname"]);
    $companydesc=test_input($_POST["ComDesc"]);
    $companywebsite=test_input($_POST["ComWebsite"]);
    $companylocation=test_input($_POST["ComLocation"]);
    $companyimage=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    //print_r($usertype);
  }
 
  $old_username=$_SESSION['cust_user'];

  $sql_get_login="SELECT Username FROM tbl_company WHERE Username='$username'";
  $sql_update_login="UPDATE tbl_company SET company_website='$companywebsite',company_description='$companydesc',company_location='$companylocation',company_image='$companyimage' WHERE Username='$username'";
  $sql_update_login2="INSERT INTO tbl_company (company_name,company_website, company_description, company_location,company_image,Username) VALUES ('$companyname', '$companywebsite', '$companydesc','$companylocation','$companyimage','$username')";

  //$sql_exe_login=mysqli_query($conn,$sql_update_login);

  if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
  {
/*     echo '<script>alert("Welcome to Geeks for Geeks")</script>';
 */    if(mysqli_query($conn,$sql_update_login))
    { 
      echo '<script>alert("Updated Successfully!")</script>';
    }
    //echo "User already exists! ";
    //header("refresh:1; Location: ../login.php");
    exit;
  }
  else{
    if(mysqli_query($conn,$sql_update_login2))
    { 
/*         echo '<script>alert("Welcome to Geeks for Geekssww23ss")</script>';
 */        echo "Added Successfully! ";
    }
    
/*     echo '<script>alert("Welcome to Geeks for Geekssss")</script>';
 */  } 




  mysqli_close($conn);
?>