<?php
require_once('connection.php');
session_start();
$email= $firstname= $lastname= $phone= $usertype= $password="";
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
    $phone=test_input($_POST["phoneno"]);
    $password=test_input($_POST["password"]);
    $usertype=test_input($_POST["usertype"]);
    $email=test_input($_POST["email"]);
    //print_r($usertype);
  }

  $sql_update_login="UPDATE tbl_Login SET FName='$firstname',LName='$lastname',Ph_no='$phone',Password='$password',User_Type='$usertype' WHERE Username='$email'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url= ../admin.php");

  }

  mysqli_close($conn);
?>