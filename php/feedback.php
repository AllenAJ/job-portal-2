<?php
require_once('connection.php');
session_start();

$username= $usertype= $rating= $details;
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=test_input($_POST["email123"]);
    $usertype=test_input($_POST["user_type123"]);
    $rating=test_input($_POST["rating"]);
    $details=test_input($_POST["details"]);
    debug_to_console($username);

  }

  $sql_insert_login="INSERT INTO tbl_feedback (Username, User_type,Rating, details) VALUES ('$username','$usertype','$rating','$details')";
/* 
  $sql_insert_login="INSERT INTO tbl_feedback (Username, User_type,Rating, details) VALUES ('a','a','1','abs')";  */

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
    echo '<script>alert("Thanks for your feedback!")</script>';
       header("refresh:0; url= ../settings.php");

  }
  else
  {
      echo "$sql_insert_login";
  } 

  mysqli_close($conn);
?>