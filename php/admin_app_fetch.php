<?php
require_once('connection.php');
session_start();

$cust_id=$_GET['custid'];

  $sql_login="SELECT * FROM tbl_application WHERE app_id='$cust_id'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
        $app_id=$row['app_id'];
        $username=$row['email'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $note=$row['note'];
        $resume=$row['resume'];
  } 

/*   mysqli_close($conn);
 */?>