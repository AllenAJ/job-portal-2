<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];

  $sql_login="SELECT Ph_no,User_Type,FName,LName,Password FROM tbl_Login WHERE Username='$username'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
        $_SESSION['cust_phone']=$row['Ph_no'];
        $_SESSION['cust_usertype']=$row['User_Type'];
        $_SESSION['cust_fname']=$row['FName'];
        $_SESSION['cust_lname']=$row['LName'];
        $_SESSION['Password']=$row['Password'];

  }

  //mysqli_close($conn);
?>