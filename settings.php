<?php
require_once('php/personal_details.php');
/* echo($_SESSION['user_type']);
 */?>

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
		<div class="container"> <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
			<ul class="navbar-nav ">
				<li class="nav-item"> <a class="nav-link" href="home.php">Home</a> </li>
        <?php
        if($_SESSION['user_type']=="Job Seeker"){ ?>
				<li class="nav-item"> <a class="nav-link" href="jobseekerd.php">Find a Job</a> </li>
        <?php }else{ ?>
				<li class="nav-item"> <a class="nav-link" href="recruiter.php">Recruit</a> </li>
        <?php
        }
        ?>
<!-- 				<li class="nav-item"> <a class="nav-link" href="#">Find a Job</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li> -->
			</ul>
		</div>
	</nav>

    <!---Settings Section-->

    <div class="container">
        <!-- /Breadcrumb -->
        <div class="row gutters-sm  mt-5 py-2">
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <div class="card-body">
                <nav class="nav flex-column nav-pills nav-gap-y-1">
                  <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                  </a>
                  <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Account Settings
                  </a>
                  <?php
                  if($_SESSION['user_type']=="Job Seeker"){ }else{ ?>
                  <a href="#company" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>Company Information
                  </a>
                  <?php
                  }
                  ?>
<!--                   <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                  </a> -->
<!--                   <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Notification
                  </a> -->
<!--                   <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
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
              <div class="card-body tab-content">
                <div class="tab-pane active" id="profile">
                  <h6>YOUR PROFILE INFORMATION</h6>
                  <hr>
                  <?php 
                                 if(isset($_SESSION['status3'])){
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    <?php       echo $_SESSION['status3'];
                                                unset($_SESSION['status3']);
                                    ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>          
                                        <?php   
                                 }
                                ?>
                  <form action='php/update_profile.php' method='POST'>
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fNameHelp" placeholder="Enter your fName" value="<?php print_r($_SESSION['cust_fname']);?>"
>
                      <!-- <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="sname">Second Name</label>
                        <input type="text" class="form-control" id="lname"  name="lname" aria-describedby="sNameHelp" placeholder="Enter your sName" value="<?php print_r($_SESSION['cust_lname']);?>" >
                        <!-- <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small> -->
                      </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" value="<?php print_r($_SESSION['cust_user']);?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="ph_no">Phone No</label>
                      <input type="number" class="form-control" id="ph_no" name="ph_no" placeholder="Enter your phone no" value="<?php print_r($_SESSION['cust_phone']);?>">
                    </div>
                    <div class="form-group">
                      <label for="ph_no">Password</label>
                      <input type="password" class="form-control" id="ph_no" name="pass" placeholder="Enter your phone no" value="<?php print_r($_SESSION['Password']);?>">
                    </div>
                    <div class="form-group">
                      <label for="user_type">User Type</label>
                      <input type="text" class="form-control" id="user_type" placeholder="Usertype" value="<?php print_r($_SESSION['cust_usertype']);?>" disabled>
                    </div>
                    <div class="form-group small text-muted">
                      All of the fields on this page are your personal details and can be updated at any time.
                    </div>
                    <button type="reset" onclick="location.href='php/logout.php'" class="btn btn-danger">Sign Out</button>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                    <button type="reset"  class="btn btn-light">Reset Changes</button>
                  </form>
                </div>
                <div class="tab-pane" id="account">
                  <h6>ACCOUNT SETTINGS</h6>
                  <hr>
                  <form action='php/deactivate_profile.php' method='POST'>
<!--                     <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter your username" value="kennethvaldez">
                      <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                    </div>
                    <hr> -->
                    <div class="form-group">
                      <label class="d-block text-danger">Delete Account</label>
                      <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                    <button class="btn btn-danger" type="submit">Delete Account</button>
                  </form>
                </div>
                <div class="tab-pane" id="security">
                  <h6>SECURITY SETTINGS</h6>
                  <hr>
                  <form action='php/update_profile.php' method='POST'>
                    <div class="form-group">
                      <label class="d-block">Change Password</label>
                      <div class="small text-muted mb-3">Do not share your password with anyone</div>

<!--                       <input type="text" class="form-control" placeholder="Enter your old password">-->                                            
                    <input type="password" name="pass" class="form-control" id="user_typef" placeholder="***" value="<?php print_r($_SESSION['Password']);?>">

<!--                       <input type="text" class="form-control mt-1"  id="pass" value=" placeholder="New password">
 -->
<!--                       <input type="text" class="form-control mt-1" placeholder="Confirm new password">
 -->                      <br>
                      <button class="btn btn-info" type="button">Update Password </button>
                    </div>
                  </form>
 <!--                  <form>
                    <div class="form-group">
                      <label class="d-block">Two Factor Authentication</label>
                      <button class="btn btn-info" type="button">Enable two-factor authentication</button>
                      <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                    </div>
                  </form> -->
                 <!--  <form>
                    <div class="form-group mb-0">
                      <label class="d-block">Sessions</label>
                      <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                      <ul class="list-group list-group-sm">
                        <li class="list-group-item has-icon">
                          <div>
                            <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                            <small class="text-muted">Your current session seen in United States</small>
                          </div>
                          <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                        </li>
                      </ul>
                    </div>
                  </form> -->
                </div>
                <?php
                      $temp_username=$_SESSION['cust_user'];
                      $sql_fetch_pay="SELECT * FROM tbl_company WHERE Username='$temp_username'";
                      $sql_exe_pay=mysqli_query($conn,$sql_fetch_pay);
                      $pay=mysqli_fetch_array($sql_exe_pay); 

                ?>
                <div class="tab-pane" id="company">
                  <h6>COMPANY INFORMATION</h6>
                  <hr>

                  <form action='php/update_company.php' method='POST' enctype="multipart/form-data">

                  <div class="form-group">
                  <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img pt-3">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pay['company_image']); ?>"
                                        alt="Image" height="64" height="59">
                                </a>
                            </div>
                            <label for="sname">Company Image</label>

                  <div class="custom-file">
                    
                    <input accept="image/*" type="file" class="custom-file-input" id="inputGroupFile02" name="img" accept=".jpg, .png, .jpeg" required>
                    <label class="custom-file-label" for="inputGroupFile02">Choose Company Image</label>
                  </div>

                  </div>

 
                    <div class="form-group">
                        <label for="sname">Company Name</label>
                        <input type="text" class="form-control" id="Comname" name="Comname" aria-describedby="fNameHelp" placeholder="Enter your fName" value="<?php echo $pay['company_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="sname">Company Description</label>
                        <input type="text" class="form-control" id="ComDesc"  name="ComDesc" aria-describedby="sNameHelp" placeholder="Enter your sName" value="<?php echo $pay['company_description'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="sname">Company Website</label>
                        <input type="text" class="form-control" id="ComWebsite"  name="ComWebsite" aria-describedby="sNameHelp" placeholder="Enter your sName" value="<?php echo $pay['company_website'];?>  " >
                    </div>
                    <div class="form-group">
                        <label for="sname">Company Location</label>
                        <input type="text" class="form-control" id="ComLocation"  name="ComLocation" aria-describedby="sNameHelp" placeholder="Enter your sName" value="<?php echo $pay['company_location'];?>  " >
                    </div>
                    <div class="form-group small text-muted">
                      All of the fields on this page are your company details and can be updated at any time.
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                    <button type="reset"  class="btn btn-light">Reset Changes</button>
                  </form>
                </div>
                <div class="tab-pane" id="notification">
                  <h6>NOTIFICATION SETTINGS</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label class="d-block mb-0">Security Alerts</label>
                      <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                        <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                        <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerability</label>
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <label class="d-block">SMS Notifications</label>
                      <ul class="list-group list-group-sm">
                        <li class="list-group-item has-icon">
                          Comments
                          <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1"></label>
                          </div>
                        </li>
                        <li class="list-group-item has-icon">
                          Updates From People
                          <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2"></label>
                          </div>
                        </li>
                        <li class="list-group-item has-icon">
                          Reminders
                          <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </li>
                        <li class="list-group-item has-icon">
                          Events
                          <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                            <label class="custom-control-label" for="customSwitch4"></label>
                          </div>
                        </li>
                        <li class="list-group-item has-icon">
                          Pages You Follow
                          <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5"></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="billing">
                  <h6>BILLING SETTINGS</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label class="d-block mb-0">Payment Method</label>
                      <div class="small text-muted mb-3">You have not added a payment method</div>
                      <button class="btn btn-info" type="button">Add Payment Method</button>
                    </div>
                    <div class="form-group mb-0">
                      <label class="d-block">Payment History</label>
                      <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                    </div>
                  </form>
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
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>
    <script>
  </script>
</body>
</html>