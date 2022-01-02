<?php
 require_once('php/recruiter_action.php');
 
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

$username=$_SESSION['cust_user'];
$_SESSION['cust_jobname']=$row['job_name'];
$job_id=$_GET['job'];


$sql = "SELECT * FROM tbl_Job_details WHERE job_id='$job_id'";
$result = $conn->query($sql);
//$conn->close();  
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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
<!--                 <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
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
        <div class="pb-4">
					<button type="button" class="btn btn-primary" onclick="parent.location='jobseeker.php'">Go Back</button>
					<!--                <button type="button" class="btn btn-primary">Primary</button>-->
				</div>
            <h1 class="h2">Job Details</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
            </p>
        </div>
    </div>
    <section class="job-details-area ptb-100" value="<?php echo $job_id;?>">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="hot-jobs-list">
                        <div class="row align-items-center">
                        <?php   // LOOP TILL END OF DATA 
               									 while($rows=$result->fetch_assoc())
                									{
                                                        $temp_username=$rows['Username'];
                                                        $sql_fetch_pay="SELECT * FROM tbl_company WHERE Username='$temp_username'";
                                                        $sql_exe_pay=mysqli_query($conn,$sql_fetch_pay);
                                                        $pay=$sql_exe_pay->fetch_assoc();
             										?>
                             <div class="col-lg-2">
                                <div class="hot-jobs-img pt-3">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pay['company_image']); ?>" alt="Image" height="64">                                
                            </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">

                                    <h3><?php echo $rows['job_name'];?></h3>
                                    <div class="links_locat d-flex align-items-center ml-3">
                                    <div class="location" style="color:#aab1b7">
                                    <p> <i class="fas fa-building"></i> <?php echo $pay['company_name'];?></p>
                                    </div>
                                    <div class="location ml-3" style="color:#aab1b7">
                                    <p> <i class="fa fa-map-marker"></i> <?php echo $pay['company_location'];?></p>
                                    </div>
                                    </div>
<!--                                     <span class="sub-title">Loren Ipsum sdfsdaf sdafsdfd aa</span> -->
                                    <ul>
                                        <li style="color:#aab1b7"><span class="ml-3" style="color:#aab1b7"><i class="fas fa-user-friends"></i> Vacancy:</span> <?php echo $rows['job_opening'];?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 ml-auto">
                                <div class="hot-jobs-btn text-right">
                                    <a type="button" class="btn btn-success" onclick="location.href='<?php echo $pay['company_website'];?>';" target="_blank">Company Website</a>
                                    <!-- <p><span>Deadline: </span>Dec 30, 2020</p> -->
                                </div>
                                <div class="hot-jobs-btn text-right mt-3">
                                    <a type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#exampleModalLong">Apply Now</a>
                                    <!-- <p><span>Deadline: </span>Dec 30, 2020</p> -->
                                </div>
                            </div>
                            <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog modal-lg p-5" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Application Form</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
										aria-hidden="true">&times;</span> </button>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="job-information">
										<form class="my-login-validation" action='php/application.php'
											method='POST' value="<?php echo $job_id;?>" enctype="multipart/form-data">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Email</label>
														<input class="form-control" type="text" name="email" value="<?php print_r($_SESSION['cust_user']);?>">
													</div>
												</div>
                                                <input class="form-control" type="hidden" name="job_id" value="<?php echo $job_id;?>">    
                                                <input class="form-control" type="hidden" name="job_name" value="<?php echo $rows['job_name'];?>">        
                                                <input class="form-control" type="hidden" name="j_username" value="<?php echo $rows['Username'];?>">        
    
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<div class="input-group date" id="datetimepicker">
															<input name="fname" type="text" class="form-control"
                                                            value="<?php print_r($_SESSION['cust_fname']);?>"> <span class="input-group-addon"></span>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<div class="input-group date" id="datetimepicker">
															<input name="lname" type="text" class="form-control"
                                                            value="<?php print_r($_SESSION['cust_lname']);?>"> <span class="input-group-addon"></span>
															<i class="bx bx-calendar"></i>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<label>Write a note to Hirer*</label>
														<textarea name="hnote" class="form-control" rows="5"></textarea>
													</div>
												</div>
<!-- 												<div class="col-lg-12">
													<div class="form-group">
														<label>Resume*</label>
														<textarea name="resume" class="form-control" rows="1"></textarea>
													</div>
												</div> -->
                                                <div class="col-lg-12">
													<div class="form-group">
														<label>Resume*</label>
                                                        <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" />
													</div>
												</div>
<!--                                                 <div class="custom-file">
                                                    <input class="ml-3" accept="pdf/*" type="file"  id="inputGroupFile02" name="pdf" accept=".jpg, .png, .pdf" required>
                                                </div> -->
												<div class="form-group m-0">
													<button class="btn btn-primary btn-block mt-4 ml-3"
														type="submit">Apply now!</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- 							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Post Job</button>
							</div> -->
						</div>
					</div>
				</div>
                        </div>
                    </div>
                    <div class="job-details-content">
                        <h3>Job Description</h3>
                        <p style="    color: #7a838b;"><?php echo $rows['job_desc'];?></p>
                        <h3>Job Requirement:</h3>
                        <p style="    color: #7a838b;"><?php echo $rows['job_requirement'];?></p>
                        <br>
                        <!-- <h4>Qualifications:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                        </ul>
                        <h4>Competencies:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua</li>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                            <li>Aliquyam erat, sed diam voluptua.</li>
                        </ul>
                        <h4>Experience Requirements:</h4>
                        <ul>
                            <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
                            <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <?php
                }
             ?>
        </div>
    </section>

</body>

</html>