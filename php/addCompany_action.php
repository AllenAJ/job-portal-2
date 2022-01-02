<?php
require_once('connection.php');
session_start();

$companyname= $companydesc= $companywebsite= $companylocation= $companyimage= $username="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=$_SESSION['cust_user'];
    $companyname=test_input($_POST["Comname"]);
    $companydesc=test_input($_POST["ComDesc"]);
    $companywebsite=test_input($_POST["ComWebsite"]);
    $companylocation=test_input($_POST["ComLocation"]);
    $companyimage=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
  }

/*   $sql_update_login="INSERT INTO tbl_company SET company_website='$companywebsite',company_description='$companydesc',company_location='$companylocation',company_image='$companyimage' WHERE Username='$username'"; */
  $sql_insert_login="INSERT INTO tbl_company (Username, company_name, company_website,company_description, company_location, company_image) VALUES ('$username', '$companyname', '$companywebsite','$companydesc', '$companylocation', '$companyimage')";


/*   $sql_get_login="SELECT Username FROM tbl_Login WHERE Username='$username'";
 */
    if(mysqli_query($conn,$sql_insert_login))
    {

            echo "Added successfully Successfully! ";
            header("Location: ../settings.php");
            exit;
    }
    else
    {
            echo "mysqli_error($conn)";
    }


  mysqli_close($conn);
?>