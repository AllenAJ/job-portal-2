<?php
require_once('connection.php');
session_start();

$username= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
/*   function valEmail($data)
  {
    var re = /\S+@\S+\.\S+/;
    return re.test($data);
  } */

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $username=test_input($_POST["email1"]);
    $password=test_input($_POST["password1"]);


  }

  $sql_login_check="SELECT * FROM tbl_Login WHERE Username='$username'";
  $sql_login_details=mysqli_query($conn,$sql_login_check);
  $sql_get_login3="SELECT * FROM tbl_Login";

  function companysession()
  {
    //echo '<script>alert("com details found")</script>';
    
/*      if(mysqli_num_rows(mysqli_query($conn,$sql_get_login3)))
    {
      echo '<script>alert("com details found")</script>';

      $_SESSION['com_name']=$row['company_name'];
      $_SESSION['com_desc']=$row['company_description'];
      $_SESSION['com_website']=$row['company_website'];
      $_SESSION['com_location']=$row['company_location'];
      $_SESSION['com_img']=$row['company_image']; 
    exit;
  }
  else
  {
    http_response_code(200);
      echo '<script>alert("com details not found")</script>';
      $_SESSION['com_name']='please fill';
      $_SESSION['com_desc']='please fill';
      $_SESSION['com_website']='please fill';
      $_SESSION['com_location']='please fill';
      $_SESSION['com_img']='please fill'; 
  }  */
  }




  while($row=mysqli_fetch_assoc($sql_login_details))
  {
    
    if($username==$row['Username'] && $password==$row['Password'])
    {

      if($row['status']=="active"){
        echo "Successfully logged in!";
        
        if($row['User_Type']=='Recruiter'){
          companysession();
          header("Location: ../recruiter.php");
        }
        else if($row['User_Type']=='Job Seeker'){
          companysession();
          header("Location: ../jobseekerd.php");
        }else if($row['User_Type']=='admin'){
          companysession();
          header("Location: ../admin.php");
        }
        $_SESSION['cust_user']=$row['Username'];
        $_SESSION['Password']=$row['Password'];
        $_SESSION['user_type']=$row['User_Type'];
        exit;
      }else
      {
        $_SESSION['status']='Account Inactive!';
			  header("refresh:0;url='/Project/login.php");
        //echo '<script>alert("Account Inactive")</script>';
        exit;
      }
    }

    else
    {
     $_SESSION['status']='Incorrect Username or Password!';
			header("refresh:0;url='/Project/login.php");
      //echo "Incorrect Username or Password! ";
      exit;
    }
 
  }