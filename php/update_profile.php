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

  $sql_update_login="UPDATE tbl_Login SET FName='$firstname',LName='$lastname',Ph_no='$phone',Password='$password' WHERE Username='$old_username'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {    
      $_SESSION['status3']='Updated Successfully!';
       echo "Updated Successfully!";
       header("refresh:0; url= ../settings.php");

  }

  mysqli_close($conn);
?>