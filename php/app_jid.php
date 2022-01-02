<?php
require_once('connection.php');
session_start();

/* if($_SESSION['user_type']=="Job Seeker"){
  //header("Location: ./recruiter.php");

}
 else 
if($_SESSION['user_type']=="Recruiter"){
  //header("Location: ./jobseekerd.php");
} 
else{
  header("Location: ./settings.php");
} */


/* $user=mysqli_real_escape_string($conn,$_GET['jobid']);

$username=$_SESSION['user'];

  $sql_login="SELECT * FROM tbl_application WHERE job_id='$username'";

  $sql_login_execute=mysqli_query($conn,$sql_login);

  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
    $_SESSION['app_id']=$row['app_id'];
    $_SESSION['fname']=$row['fname'];
    $_SESSION['lname']=$row['lname'];
    $_SESSION['note']=$row['note'];
    $_SESSION['resime']=$row['resume'];

  } */

 // mysqli_close($conn);
?>