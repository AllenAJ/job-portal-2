<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];


/* if($_SESSION['user_type']=="Recruiter"){
  //header("Location: ./recruiter.php");

}
/* else 
if($_SESSION['user_type']=="Job Seeker"){
  header("Location: ./jobseekerd.php");
} 
else{
  header("Location: ./settings.php");
} */




function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$username=$_SESSION['cust_user'];

  $sql_login="SELECT Ph_no,User_Type,FName,LName FROM tbl_Login WHERE Username='$username'";

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
        $_SESSION['cust_phone']=$row['Ph_no'];
        $_SESSION['cust_usertype']=$row['User_Type'];
        $_SESSION['cust_fname']=$row['FName'];
        $_SESSION['cust_lname']=$row['LName'];
        $_SESSION['Password']=$row['Password'];
  }

  $username=$_SESSION['cust_user'];
  $check = 12;

  

    debug_to_console('nib');
   $job_name= $job_desc= $job_opening= $job_requirement="";
 function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $job_name=test_input($_POST["title"]);
    $job_opening=test_input($_POST["jopening"]);
    $job_desc=test_input($_POST["jdesc"]);
    $job_date=test_input($_POST["jdate"]);
    $job_requirement=test_input($_POST["jreq"]);
    $job_category=test_input($_POST["category"]);
    $check = 1;
    debug_to_console('sup');
  }
    if($check<3){
    $sql_insert_login="INSERT INTO tbl_Job_details (Username, job_name,job_desc, job_date,job_opening, job_requirement,cat_id,status) VALUES ( '$username', '$job_name','$job_desc','$job_date' ,'$job_opening', '$job_requirement','$job_category','active')";
    $sql_get_login="SELECT * FROM tbl_company WHERE Username='$username'";


    if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
    {
        echo '<script>alert("Please fill company details first2!")</script>';
        if(mysqli_query($conn,$sql_insert_login))
        {
          

            echo "Added Successfully! ";
            header("Location: ../recruiter.php");
            exit;
        }
        else
        {
          echo '<script>alert("mysqli_error($conn)")</script>';

            echo "mysqli_error($conn)";
        } 
    }
    else{
      echo '<script>alert("Please fill company details first!")</script>';
  }

mysqli_close($conn);
    }

?>