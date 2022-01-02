<?php

require_once('php/admin_confirm.php');
/* echo('sdfsdff');
echo($_SESSION['user_type']); */
?>

<?php
require_once('php/connection.php');
session_start();
$from=date('2021-01-01'); $to=date('Y-m-d'); 
$op3="All";
$op2="All";
$op5="All";
$op="All";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $from = test_input($_POST["from"]);
    $to = test_input($_POST["to"]);
    $op = test_input($_POST["op"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $sql_fetch_order="SELECT * FROM tbl_Login";
  $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  $sql_fetch_order2="SELECT * FROM tbl_Job_details";
  $sql_fetch2=mysqli_query($conn,$sql_fetch_order2); 
  $sql_fetch_order3="SELECT * FROM tbl_application";
  $sql_fetch3=mysqli_query($conn,$sql_fetch_order3); 
  $sql_fetch_order4="SELECT * FROM tbl_feedback";
  $sql_fetch4=mysqli_query($conn,$sql_fetch_order4);

  if($op=="All")
  {
  $sql_fetch_order="SELECT * FROM tbl_Login";
  $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  }

  else if($op=="Recruiter")
  {
    $sql_fetch_order="SELECT * FROM tbl_Login where User_Type='Recruiter'";
    $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  }

  else if($op=="Job_Seeker")
  {
    $sql_fetch_order="SELECT * FROM tbl_Login where User_Type='Job Seeker'";
    $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  }
  else if($op=="Alphabetical")
  {
    $sql_fetch_order="SELECT * FROM tbl_Login order by FName asc";
    $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  }
?>

<?php
 
 $op3="All";
 $op2="All";
 $op5="All";
 $op="All";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $op2 = test_input2($_POST["op2"]);
  }

  function test_input2($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
/*   $sql_fetch_order="SELECT * FROM tbl_Login";
  $sql_fetch=mysqli_query($conn,$sql_fetch_order);
  $sql_fetch_order2="SELECT * FROM tbl_Job_details";
  $sql_fetch2=mysqli_query($conn,$sql_fetch_order2); */

   if($op2=="All")
  {
  $sql_fetch_order2="SELECT * FROM tbl_Job_details";
  $sql_fetch2=mysqli_query($conn,$sql_fetch_order2);
/*   $sql_fetch_order="SELECT * FROM tbl_Login";
  $sql_fetch=mysqli_query($conn,$sql_fetch_order); */
  }
  else if($op2=="job_opening")
  {
    $sql_fetch_order2="SELECT * FROM tbl_Job_details order by job_opening asc";
    $sql_fetch2=mysqli_query($conn,$sql_fetch_order2);
/*       $sql_fetch_order="SELECT * FROM tbl_Login";
  $sql_fetch=mysqli_query($conn,$sql_fetch_order); */
  } 
?>
<?php
 
 $op3="All";
 $op2="All";
 $op5="All";
 $op="All";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
     $op3 = test_input3($_POST["op3"]);
   }
 
   function test_input3($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   
 
    if($op3=="All")
   {
   $sql_fetch_order3="SELECT * FROM tbl_application";
   $sql_fetch3=mysqli_query($conn,$sql_fetch_order3);
   }
   else if($op3=="Alphabetical")
   {
     $sql_fetch_order3="SELECT * FROM tbl_application order by fname asc";
     $sql_fetch3=mysqli_query($conn,$sql_fetch_order3);
   } 
 ?>


<?php
  $op3="All";
  $op2="All";
  $op5="All";
  $op="All";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
      $op5 = test_input4($_POST["op5"]);
    }
  
    function test_input4($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    

  
     if($op5=="All")
    {
    $sql_fetch_order4="SELECT * FROM tbl_feedback";
    $sql_fetch4=mysqli_query($conn,$sql_fetch_order4);
    }
    else if($op5=="rating")
    {
      $sql_fetch_order4="SELECT * FROM tbl_feedback order by Rating asc";
      $sql_fetch4=mysqli_query($conn,$sql_fetch_order4);
    }     
    else if($op5=="Recruiter")
    {
      $sql_fetch_order4="SELECT * FROM tbl_feedback where User_type='Recruiter'";
      $sql_fetch4=mysqli_query($conn,$sql_fetch_order4);
    }     
    else if($op5=="Job_Seeker")
    {
      $sql_fetch_order4="SELECT * FROM tbl_feedback where User_type='Job Seeker'";
      $sql_fetch4=mysqli_query($conn,$sql_fetch_order4);
    } 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body >
    <!-- SIMPLE NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="./settings.php">Profile</a>
                </li>
<!--                 <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li> -->
            </ul>
        </div>
    </nav>
        <!-- Title -->
        <div class="container mt-5">
        <div class="text-center">
            <h1 class="h2">Admin Panel</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>All the administrator actions can be taken from here
            </p>
        </div>
    </div>
    <!---Settings Section-->

    <div class="container-fluid">
        <!-- /Breadcrumb -->
        <div class="row gutters-sm  mt-5 py-2">
          <div class="col-md-2 d-none d-md-block">
            <div class="card">
              <div class="card-body">
                <nav class="nav flex-column nav-pills nav-gap-y-1">
                  <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>User List
                  </a>
                  <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg fill="none" height="24" viewBox="0 0 16 16" width="24"><path d="M2.56684 4.23096H13.1765C14.3177 4.23096 15.2433 5.15669 15.2433 6.29921V12.2062C15.2433 13.3487 14.3177 14.2744 13.1765 14.2744H2.56684C1.42562 14.2744 0.5 13.3487 0.5 12.2062V6.29921C0.5 5.15669 1.42562 4.23096 2.56684 4.23096Z" stroke="currentColor"></path><mask fill="white" id="path-2-inside-1"><path clip-rule="evenodd" d="M4.87891 3.90224C4.87891 2.4837 5.44618 1.33398 6.14522 1.33398H9.6019C10.3009 1.33398 10.8682 2.4837 10.8682 3.90224" fill-rule="evenodd"></path></mask><path d="M6.47891 3.90224C6.47891 3.38456 6.5858 2.9948 6.68491 2.79385C6.73437 2.69354 6.75182 2.70076 6.69421 2.75018C6.62637 2.80838 6.4365 2.93398 6.14522 2.93398V-0.266016C4.85136 -0.266016 4.12376 0.752284 3.81494 1.37847C3.45565 2.10701 3.27891 3.00138 3.27891 3.90224H6.47891ZM6.14522 2.93398H9.6019V-0.266016H6.14522V2.93398ZM9.6019 2.93398C9.31062 2.93398 9.12075 2.80838 9.05291 2.75018C8.9953 2.70076 9.01274 2.69354 9.06221 2.79385C9.16132 2.9948 9.26821 3.38456 9.26821 3.90224H12.4682C12.4682 3.00138 12.2915 2.10701 11.9322 1.37847C11.6234 0.752284 10.8958 -0.266016 9.6019 -0.266016V2.93398Z" fill="currentColor" mask="url(#path-2-inside-1)"></path><path d="M8.727 7.54053H7.01577C6.54323 7.54053 6.16016 7.92381 6.16016 8.39661C6.16016 8.86941 6.54323 9.2527 7.01577 9.2527H8.727C9.19954 9.2527 9.58262 8.86941 9.58262 8.39661C9.58262 7.92381 9.19954 7.54053 8.727 7.54053Z" fill="currentColor"></path><path d="M0.597656 11.1792H15.2643" stroke="currentColor"></path></svg> Job List
                  </a>
                  <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg fill="none" height="24" viewBox="0 0 24 24" width="24"><path d="M23 21.4783C23 21.732 22.8992 21.9752 22.7198 22.1546C22.5405 22.334 22.2972 22.4348 22.0435 22.4348H1.95652C1.70284 22.4348 1.45954 22.334 1.28016 22.1546C1.10078 21.9752 1 21.732 1 21.4783V15.7391H7.69565V16.6957C7.69717 17.2026 7.8992 17.6883 8.25764 18.0467C8.61608 18.4051 9.10179 18.6072 9.6087 18.6087H14.3913C14.8982 18.6072 15.3839 18.4051 15.7424 18.0467C16.1008 17.6883 16.3028 17.2026 16.3043 16.6957V15.7391H23V21.4783Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M1 15.7391L4.07139 10.4783C4.1551 10.3333 4.27539 10.2128 4.42025 10.1289C4.56511 10.0449 4.72946 10.0005 4.89687 10H19.1031C19.2705 10.0005 19.4349 10.0449 19.5798 10.1289C19.7246 10.2128 19.8449 10.3333 19.9286 10.4783L23 15.7391" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>  Application List
                  </a>
                  <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Feedback List
                  </a>
                  <a href="#cat" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Category List
                  </a>
                  <!-- <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>Billing
                  </a> -->
                </nav>
              </div>
            </div>
          </div>
          
          <div class="col-md-8">
            <div class="card">
              <div class="card-header border-bottom mb-3 d-flex d-md-none">
                <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                  <li class="nav-item">
                    <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                  </li>
                </ul>
              </div>
              <div class="card-body tab-content" >
                <div class="tab-pane active" id="profile">
                  <h6>USER LIST</h6>
                  <hr>

                  <!-- Filter code -->
                  <form class="" method="post" action="admin.php">
                   <!--  <label for="validationCustom01" class="form-label d-flex flex-row">

                      <label for="validationCustom01" class="form-label ">Date :
                        <div class="input-group has-validation">
                          <span class="input-group-text">From</span>
                          <input name="from" type="date" min="1" class="form-control" style=" width: 160px;"
                            value="<?php print_r($from);?>"  placeholder="No." required>
                        </div>
                      </label>

                      <label for="validationCustom01" class="form-label mt-4" style="">
                        <div class="input-group has-validation">
                          <span class="input-group-text" >To</span>
                          <input name="to" type="date" min="1" class="form-control" style="width: 160px;"
                            value="<?php print_r($to);?>" id="num" placeholder="No." required>
                        </div>
                      </label> -->
                      <div class="row">
                      <div class="col-lg-4">

                        <div class="form-group">
                          <select name="op" class="form-control" style="" id="exampleinput"
                            required>
                            <option disabled-selected hidden value="<?php print_r($op);?>"><?php print_r($op);?></option>
                            <option value="All">
                              All
                            </option>
                            <option value="Recruiter">
                              Recruiter
                            </option>
                            <option value="Job_Seeker">
                              Job Seeker
                            </option>
                            <option value="Alphabetical">
                              Alphabetical Order
                            </option>
                          </select>
                        </div>
                        </div>

                        <div class="col-lg-4">

                      <button type="submit" class="btn btn-primary" >Apply</button>
<!--                       <button href="php/exportData.php" target="_blank" class="btn btn-success ml-2" >Export CSV</button>
 -->                      <input class="btn btn-success ml-2" type="button" value="Export CSV" onclick="window.open('php/exportData.php')">
                      </div>
                     </div>

                  </form>
                  
                      
                  <table class="table table-striped">
											<thead>
												<tr>
													<th>Username</th>
													<th>Password</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Phone no</th>
                          <th>User Type</th>
												</tr>
											</thead>
											<tbody>
												
                        <?php   // LOOP TILL END OF DATA 
/*                             require_once('php/connection.php');
 */                            //$sql_fetch = "SELECT * FROM tbl_Login";
/*                             $sql_fetch = "SELECT * FROM tbl_Login";
 */                            /* $sql_fetch = "SELECT * FROM tbl_Login order by FName asc "; */

                            
                            //$result=mysqli_query($conn,$sql_fetch);

                            while($rows=$sql_fetch->fetch_assoc())
                           { 
                                                        
                        ?>
                        
                        <tr >
                          <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                          
                          <td >
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;" wrap="hard">
                            <?php echo $rows['Username'];?>   
                          </a>
                          </td>                          
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['Password'];?>   
                          </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['FName'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['LName'];?>
                          </a>
                          </td>
                          <td>
                            <a href="php/admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['Ph_no'];?>
                          </td>
                          <td>
                            <a href="php/admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['User_Type'];?>
                          </a>
                          </td>
                       
                        </tr>
                        
                        <?php
                          }
                        ?>
												</tr>

											</tbody>
										</table>
                </div>
                <div class="tab-pane" id="account">
                  <h6>JOB LIST</h6>
                  <hr>
                  <form class="" method="post" action="admin.php#account">

                  <div class="row">
                      <div class="col-lg-4">

                        <div class="form-group">
                          <select name="op2" class="form-control" style="" id="exampleinput"
                            required>
                            <option disabled-selected hidden value="<?php print_r($op2);?>"><?php print_r($op2);?></option>
                            <option value="All">
                              All
                            </option>
                            <option value="job_opening">
                              Job opening
                            </option>
                          </select>
                        </div>
                        </div>

                        <div class="col-lg-4">

                      <button type="submit" class="btn btn-primary" >Apply</button>
<!--                       <button href="php/exportData.php" target="_blank" class="btn btn-success ml-2" >Export CSV</button>
 -->                      <input class="btn btn-success ml-2" type="button" value="Export CSV" onclick="window.open('php/exportJobData.php')">
                      </div>
                     </div>
                        </form>
                  <table class="table table-striped">
											<thead>
												<tr>
													<th>Job Id</th>
													<th>Username</th>
													<th>Job Name</th>
													<th>Job Desc</th>
													<th>Job Opening</th>
                          <th>Job Experience</th>
												</tr>
											</thead>
											<tbody>
												
                        <?php   // LOOP TILL END OF DATA 
                        /*   require_once('php/connection.php');
                          $sql_fetch = "SELECT * FROM tbl_Job_details";
                          $result=mysqli_query($conn,$sql_fetch); */

                            while($rows=$sql_fetch2->fetch_assoc())
                           { 
                                                        
                        ?>
                        
                        <tr >
                          <!--FETCHING DATA FROM EACH 
                                            ROW OF EVERY COLUMN-->

                          
                          <td >
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_id'];?>   
                          </a>
                          </td>                          
                          <td>
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['Username'];?>   
                          </a>
                          </td>
                          <td>
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_name'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_desc'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_opening'];?>
                          </td>
                          <td>
                            <a href="admin_job.php?jid=<?php echo $rows['job_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_requirement'];?>
                          </a>
                          </td>
                       
                        </tr>
                        
                        <?php
                          }
                        ?>
												</tr>

											</tbody>
										</table>
                </div>
                <div class="tab-pane" id="security" wrap="hard" rows="2" cols="20">
                  <h6>APPLICATION LIST</h6>
                  <hr>
                  <form class="" method="post" action="admin.php">
                   <!--  <label for="validationCustom01" class="form-label d-flex flex-row">

                      <label for="validationCustom01" class="form-label ">Date :
                        <div class="input-group has-validation">
                          <span class="input-group-text">From</span>
                          <input name="from" type="date" min="1" class="form-control" style=" width: 160px;"
                            value="<?php print_r($from);?>"  placeholder="No." required>
                        </div>
                      </label>

                      <label for="validationCustom01" class="form-label mt-4" style="">
                        <div class="input-group has-validation">
                          <span class="input-group-text" >To</span>
                          <input name="to" type="date" min="1" class="form-control" style="width: 160px;"
                            value="<?php print_r($to);?>" id="num" placeholder="No." required>
                        </div>
                      </label> -->
                      <div class="row">
                      <div class="col-lg-4">

                        <div class="form-group">
                          <select name="op3" class="form-control" style="" id="exampleinput"
                            required>
                            <option disabled-selected hidden value="<?php print_r($op3);?>"><?php print_r($op3);?></option>
                            <option value="All">
                              All
                            </option>
                            <option value="Alphabetical">
                              Alphabetical Order
                            </option>
                          </select>
                        </div>
                        </div>

                        <div class="col-lg-4">

                      <button type="submit" class="btn btn-primary" >Apply</button>
<!--                       <button href="php/exportData.php" target="_blank" class="btn btn-success ml-2" >Export CSV</button>
 -->                      <input class="btn btn-success ml-2" type="button" value="Export CSV" onclick="window.open('php/exportAppData.php')">
                      </div>
                     </div>

                  </form>
                  <table class="table table-striped">
											<thead>
												<tr>
													<th>APP ID</th>
													<th>Username</th>
													<th>JOB ID</th>
													<th>First Name</th>
													<th>Last Name</th>
                          <th>Note</th>
                          <th>Resume</th>
												</tr>
											</thead>
											<tbody>
												
                        <?php   // LOOP TILL END OF DATA 
                          require_once('php/connection.php');

                          $sql_fetch = "SELECT * FROM tbl_application";
                          $result=mysqli_query($conn,$sql_fetch);

                            while($rows=$result->fetch_assoc())
                           { 
                                                        
                        ?>
                        
                        <tr >
                          <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->

                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['app_id'];?>   
                          </a>
                          </td>                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['email'];?>   
                          </a>
                          </td>
                          <td>
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['job_id'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['fname'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['lname'];?>
                          </td>
                          <td>
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['note'];?>
                          </a>
                          </td>
                          <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">
                            <a href="admin_app.php?custid=<?php echo $rows['app_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;" >
                            <?php echo $rows['resume'];?>
                          </a>
                          </td>
                       
                        </tr>
                        
                        <?php
                          }
                        ?>
												</tr>

											</tbody>
										</table>
                </div>
                <div class="tab-pane" id="notification">
                  <h6>FEEDBACK LIST</h6>
                  <hr>
                  <form class="" method="post" action="admin.php#account">

<div class="row">
    <div class="col-lg-4">

      <div class="form-group">
        <select name="op5" class="form-control" style="" id="exampleinput"
          required>
          <option disabled-selected hidden value="<?php print_r($op5);?>"><?php print_r($op5);?></option>
          <option value="All">
            All
          </option>
          <option value="rating">
            Rating
          </option>
          <option value="Recruiter">
            Recruiter
          </option>
          <option value="Job_Seeker">
            Job Seeker
          </option>
        </select>
      </div>
      </div>

      <div class="col-lg-4">

    <button type="submit" class="btn btn-primary" >Apply</button>
<!--                       <button href="php/exportData.php" target="_blank" class="btn btn-success ml-2" >Export CSV</button>
-->                      <input class="btn btn-success ml-2" type="button" value="Export CSV" onclick="window.open('php/exportFeedbackData.php')">
    </div>
   </div>
      </form>
                  <table class="table table-striped">
											<thead>
												<tr>
													<th>FEEDBACK ID</th>
													<th>USERNAME</th>
													<th>USERTYPE</th>
													<th>RATING</th>
													<th>DETAILS</th>
												</tr>
											</thead>
											<tbody>
												
                        <?php   // LOOP TILL END OF DATA 
                          require_once('php/connection.php');
/*                           $sql_fetch = "SELECT * FROM tbl_feedback";
                          $result=mysqli_query($conn,$sql_fetch); */

                            while($rows=$sql_fetch4->fetch_assoc())
                           { 
                                                        
                        ?>
                        
                        <tr >
                          <!--FETCHING DATA FROM EACH 
                                            ROW OF EVERY COLUMN-->

                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['FeedbackID'];?>   
                          </a>
                          </td>                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['Username'];?>   
                          </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['User_type'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['Rating'];?>
                          </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['Username']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['details'];?>
                          </td>
                       
                        </tr>
                        
                        <?php
                          }
                        ?>
												</tr>

											</tbody>
										</table>
                </div>
                <div class="tab-pane" id="cat">
                  <h6>CATEGORY LIST</h6>
                  <hr>
                  <form name="myForm" class="" action='php/addCategory.php' method='POST' autocomplete="on">        
                  <div class="row">
                            <div class="col-lg-4">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="cat_name"  name="cat_name" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                 <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-search"></i>
                                    Add Category
                                </button> 
                            </div>
                        </div>
                        </form>
                  <table class="table table-striped">
											<thead>
												<tr>
													<th>CATEGORY ID</th>
													<th>CATEGORY NAME</th>
													<th>STATUS</th>
												</tr>
											</thead>
											<tbody>
												
                         <?php   // LOOP TILL END OF DATA 
                          require_once('php/connection.php');
                          $sql_fetch = "SELECT * FROM tbl_category";
                          $result=mysqli_query($conn,$sql_fetch);

                            while($rows=$result->fetch_assoc())
                           { 
                                                        
                        ?>
                        
                        <tr >
                          <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->

                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_cat.php?custid=<?php echo $rows['cat_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['cat_id'];?>   
                          </a>
                          </td>                          
                          <td style="word-wrap: break-word;min-width: 80px;max-width: 160px;">
                            <a href="admin_cat.php?custid=<?php echo $rows['cat_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['cat_name'];?>   
                          </a>
                          </td>
                          <td>
                            <a href="admin_cat.php?custid=<?php echo $rows['cat_id']; ?>" role="button" style="display: block;text-decoration: none;color: inherit;">
                            <?php echo $rows['cat_status'];?>
                          </a>
                          </td>
                       
                        </tr>
                        
                        <?php
                          }
                        ?>
												</tr>

											</tbody>
										</table>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script>
  </script>
</body>
</html>