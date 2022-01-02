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

    $cat_name=test_input($_POST["cat_name"]);
    $cat_id=test_input($_POST["cat_id"]);
    //print_r($usertype);
  }

  $sql_update_login="UPDATE tbl_category SET cat_name='$cat_name' WHERE cat_id='$cat_id'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url= ../admin.php");

  }

  mysqli_close($conn);
?>