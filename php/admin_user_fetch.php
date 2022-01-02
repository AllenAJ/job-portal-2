<?php
require_once('connection.php');
session_start();

$cust_id=$_GET['custid'];

  $sql_login="SELECT * FROM tbl_Login WHERE Username='$cust_id'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
/*         $_SESSION['cust_phone']=$row['Ph_no'];
        $_SESSION['cust_usertype']=$row['User_Type'];
        $_SESSION['cust_fname']=$row['FName'];
        $_SESSION['cust_lname']=$row['LName'];
        $_SESSION['Password']=$row['Password']; */
        $fname=$row['FName'];
        $lname=$row['LName'];
        $phoneno=$row['Ph_no'];
        $usertype=$row['User_Type'];
        $password=$row['Password'];
        $status=$row['status'];
  } 

/*   mysqli_close($conn);
 */?>