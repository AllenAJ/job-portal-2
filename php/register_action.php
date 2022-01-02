<?php
require_once('connection.php');
session_start();


$username= $firstname= $lastname= $phone= $usertype= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
     $firstname=test_input($_POST["fname"]);
    $lastname=test_input($_POST["lname"]);
    $username=test_input($_POST["email2"]);
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['status2']='Invalid Email!';
      header("refresh:0;url='/Project/login.php");
      exit;
    }     
    $phone=test_input($_POST["ph_no"]);
    $usertype=test_input($_POST["usertype"]);
    $password=test_input($_POST["password2"]);

  }


  $sql_insert_login="INSERT INTO tbl_Login (Username, Password, User_Type,FName, LName, Ph_no, status) VALUES ('$username', '$password', '$usertype','$firstname', '$lastname', '$phone','active')";
  $sql_insert_login2="INSERT INTO tbl_jseeker (Username, Js_fname, Js_lname,Js_phno) VALUES ('$username', '$firstname', '$lastname','$phone')";
  $sql_insert_login3="INSERT INTO tbl_recruiter (Username, R_fname, R_lname,R_phno) VALUES ('$username', '$firstname', '$lastname','$phone')";
/* $sql_insert_login="INSERT INTO tbl_Login (Username, Password, User_Type,FName, LName, Ph_no, status) VALUES ('123', '123', '123','123', '123', '1221312313','active')";*/
/* $sql_insert_customer="INSERT INTO tbl_customer (Username,C_FName,C_MName,C_LName,C_PhNo,C_HNo,C_Street,C_Dist,C_pin) VALUES ('$username', '$firstname', '$middlename', '$lastname', '$phone', '$housename', '$street', '$district', '$zip')"; */

  $sql_get_login="SELECT Username FROM tbl_Login WHERE Username='$username'";
  

  if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
  {
/*     echo '<script>alert("User already exists!")</script>';
 */ $_SESSION['status2']='User already exists!';
    header("refresh:0;url='/Project/login.php");
    echo "User already exists! ";
    //header("refresh:1; Location: ../login.php");
    exit;
  }

  else
  {
    if(mysqli_query($conn,$sql_insert_login))
    { 
       if($usertype=="Job Seeker"){
         mysqli_query($conn,$sql_insert_login2);
      }
      else if($usertype=="Recruiter"){  
         mysqli_query($conn,$sql_insert_login3);
      } else{  

      }
            echo "Registered Successfully! ";
            header("Location: ../addCard.php");
            $_SESSION['cust_fname']=$firstname;
            $_SESSION['cust_lname']=$lastname;
            $_SESSION['cust_user']=$username;
            $_SESSION['user_type']=$usertype;

            exit;
    }
        else
        {
          $_SESSION['status2']='Invalid Email!';
			    header("refresh:0;url='/Project/login.php");
          /* http_response_code(200);

            echo "mysqli_error($conn)";
            echo '<script>alert("Invalid Email")</script>'; */
        }
    }

  // mysqli_close($conn);
?>