<?php
require_once('connection.php');
session_start();

$cust_id=$_GET['custid'];

  $sql_login="SELECT * FROM tbl_category WHERE cat_id='$cust_id'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {

        $cat_name=$row['cat_name'];
/*         $=$row['job_opening'];
        $job_desc=$row['job_desc'];
        $job_req=$row['job_requirement']; */
        $cat_id=$row['cat_id'];
        $status=$row['cat_status'];
  } 

/*   mysqli_close($conn);
 */?>