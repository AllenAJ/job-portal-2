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

    $job_name=test_input($_POST["jname"]);
    $job_vac=test_input($_POST["jvacancy"]);
    $job_desc=test_input($_POST["jdesc"]);
    $job_req=test_input($_POST["jreq"]);
    $job_id=test_input($_POST["jid2"]);
    //print_r($usertype);
  }

  $sql_update_login="UPDATE tbl_Job_details SET job_name='$job_name',job_opening='$job_vac',job_desc='$job_desc',job_requirement='$job_req' WHERE job_id='$job_id'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url= ../admin.php");

  }

  mysqli_close($conn);
?>