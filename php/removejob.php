<?php
/* session_destroy();
 */
require_once('connection.php');
session_start();

if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

$job_id=$_GET['jobid'];

$sql_update_login="DELETE FROM tbl_Job_details where job_id='$job_id'";

$sql_exe_login=mysqli_query($conn,$sql_update_login);

if($sql_exe_login)
{
     echo "Deleted Successfully!";
     header("refresh:1; url= ../recruiter.php");

}

?>