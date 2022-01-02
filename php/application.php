<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$sql_login="SELECT Ph_no,User_Type,FName,LName FROM tbl_Login WHERE Username='$username'";

$sql_login_execute=mysqli_query($conn,$sql_login);


while($row=mysqli_fetch_assoc($sql_login_execute))
{
      $_SESSION['app_phone']=$row['Ph_no'];
      $_SESSION['app_usertype']=$row['User_Type'];
      $_SESSION['app_fname']=$row['FName'];
      $_SESSION['app_lname']=$row['LName'];    
}

$username=$_SESSION['cust_user'];
$check = 12;

$username=$_SESSION['cust_user'];

$app_note= $app_resume= $app_job_id= $app_fname= $app_lname="";
 function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $app_fname=test_input($_POST["fname"]);
    $app_lname=test_input($_POST["lname"]);
    $app_note=test_input($_POST["hnote"]);
    $app_job_id=test_input($_POST["job_id"]);
    $app_job_name=test_input($_POST["job_name"]);
    $app_job_username=test_input($_POST["j_username"]);
    $app_resume=test_input($_POST["resume"]);
    $upload_pdf=$_FILES["pdf_file"]["name"];
move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"pdf/" . $_FILES["pdf_file"]["name"]);
/*     $app_resume2=addslashes(file_get_contents($_FILES["pdf"]["tmp_name"]));
 */

    $check = 1;
    debug_to_console('sup');
  }

    if($check<3){

/*     $sql_insert_login="INSERT INTO tbl_application (email, job_id,job_name,job_username,fname, lname, note, resume,status,resume2) VALUES ( '$username', '$app_job_id','$app_job_name','$app_job_username',$app_fname', '$app_lname', '$app_note', '$app_resume','Pending','$app_resume2')"; */
    
    $sql_insert_login="INSERT INTO tbl_application (email, job_id,job_name,job_username,fname, lname, note, resume,status,resume2) VALUES ( '$username', '$app_job_id','$app_job_name','$app_job_username','$app_fname', '$app_lname', '$app_note', '$app_resume','Pending','$upload_pdf')";
    $sql_get_login="SELECT * FROM tbl_application WHERE email='$username' AND job_id='$app_job_id'";

    
    if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
    {
        //echo '<script>alert("You already applied once!")</script>';
        header("Location: ../jobseeker.php");
        $_SESSION['status4']='You already applied once!';
    }
    else{
    if(mysqli_query($conn,$sql_insert_login))
    {

        echo "Added Successfully! ";
        header("Location: ../jobseeker.php");
        $_SESSION['status5']='Applied Successfully!';
        exit;
    }
    else
    {
        echo "mysqli_error($conn)";
    } 
    }
mysqli_close($conn);
    }

?>