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

$app_id=$_GET['appid'];
$status=$_GET['status'];

$sql_update_login="UPDATE tbl_application SET status='$status' where app_id='$app_id'";

$sql_exe_login=mysqli_query($conn,$sql_update_login);

if($sql_exe_login)
{
    //echo '<script>alert("Updated Successfully!")</script>';
     echo "Updated Successfully!";
     header("refresh:0; url= ../recruiter.php");

}

?>