<?php
require_once('connection.php');
session_start();

$cust_id=$_GET['jid'];

  $sql_login="SELECT * FROM tbl_Job_details WHERE job_id='$cust_id'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {

        $job_name=$row['job_name'];
        $job_vac=$row['job_opening'];
        $job_desc=$row['job_desc'];
        $job_req=$row['job_requirement'];
        $job_id=$row['job_id'];
        $status=$row['status'];
  } 

/*   mysqli_close($conn);
 */?>