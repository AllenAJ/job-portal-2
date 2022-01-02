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

$sql_update_login="DELETE FROM tbl_application where app_id='$app_id'";

$sql_exe_login=mysqli_query($conn,$sql_update_login);

if($sql_exe_login)
{
     echo "Deleted Successfully!";
     header("refresh:0; url= ../jobseekerd.php");

}

?>