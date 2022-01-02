<?php
require_once('connection.php');
session_start();
$username= $firstname= $lastname= $phone= $usertype= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $firstname=test_input($_POST["fname"]);
    $lastname=test_input($_POST["lname"]);
    $phone=test_input($_POST["ph_no"]);
    $password=test_input($_POST["pass"]);
    //print_r($usertype);
  }

  $old_username=$_SESSION['cust_user'];

  $sql_update_login="UPDATE tbl_Login SET status='inactive' WHERE Username='$old_username'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Deactivated Successfully!";
       session_destroy();
       header("refresh:1; url= ../login.php");

  }

  mysqli_close($conn);
?>