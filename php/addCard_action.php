<?php
require_once('connection.php');
session_start();

$cardOwner= $cardNum= $expDate= $cvv= $username= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $usertype=$_SESSION['user_type'];

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $cardOwner=test_input($_POST["username"]);
    $cardNum=test_input($_POST["cardNumber"]);
    $expDate=test_input($_POST["expDate"]);
    $cvv=test_input($_POST["cvv"]);
    $username=$_SESSION['cust_user'];
    // $usertype=test_input($_POST["usertype"]);
    // $password=test_input($_POST["password2"]);
    //print_r($usertype);
  }

  $sql_insert_login="INSERT INTO tbl_card (Username, cardOwner, cardNum,expDate, cvv) VALUES ('$username', '$cardOwner', '$cardNum','$expDate', '$cvv')";


  $sql_get_login="SELECT Username FROM tbl_Login WHERE Username='$username'";

  if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
  {
    if(mysqli_query($conn,$sql_insert_login))
    {

            echo "Payed Successfully! ";
            if($usertype=="Job Seeker"){
              header("Location: ../settings.php");
            }
           else if($usertype=="Recruiter"){  
              header("Location: ../addCompany.php");
           } else{  
              header("Location: ../settings.php");

           }
            exit;
    }
        else
        {
            echo "mysqli_error($conn)";
        }
  }

  else
  {

    }

  mysqli_close($conn);
?>