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

    $fname=test_input($_POST["fname"]);
    $lname=test_input($_POST["lname"]);
    $note=test_input($_POST["note"]);
    $resume=test_input($_POST["resume"]);
/*     $job_req=test_input($_POST["jreq"]);
 */    $job_id=test_input($_POST["appid2"]);
    //print_r($usertype);
  }

  $sql_update_login="UPDATE tbl_application SET fname='$fname',lname='$lname',note='$note',resume='$resume' WHERE app_id='$job_id'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url= ../admin.php");

  }

  mysqli_close($conn);
?>