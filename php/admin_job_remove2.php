<?php
require_once('connection.php');
session_start();

$cust_id=$_GET['custid'];
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
  
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
  }
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    //print_r($usertype);
  }

  $sql_update_login="UPDATE tbl_Job_details SET status='active' WHERE job_id='$cust_id'";

  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {

    echo '<script>alert("Deactivated Successfully!")</script>';
    debug_to_console($cust_id);
 
       header("refresh:0; url= ../admin.php"); 

  }

  mysqli_close($conn);
?>