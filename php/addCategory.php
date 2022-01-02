<?php
require_once('connection.php');
session_start();

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $catName=test_input($_POST["cat_name"]);
  }

  $sql_insert_login="INSERT INTO tbl_category (cat_name,cat_status) VALUES ('$catName', 'active')";

    if(mysqli_query($conn,$sql_insert_login))
    {
        echo "Added Successfully! ";
        header("Location: ../admin.php");
        exit;
    }else
    {
        echo "mysqli_error($conn)";
    }

  mysqli_close($conn);
?>