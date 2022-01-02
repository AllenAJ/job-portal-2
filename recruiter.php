<?php
require_once('php/recruiter_action.php');
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

$username=$_SESSION['cust_user'];



/* $conn->close(); */ 
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	<style>

	</style>
</head>

<body>
	<!-- SIMPLE NAVBAR -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
		<div class="container"> <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
			<ul class="navbar-nav ">
				<li class="nav-item"> <a class="nav-link" href="home.php">Home</a> </li>
				<li class="nav-item"> <a class="nav-link" href="recruiter.php">Recruit</a> </li>
				<li class="nav-item"> <a class="nav-link" href="settings.php">Settings</a> </li>
<!-- 				<li class="nav-item"> <a class="nav-link" href="#">Find a Job</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li> -->
			</ul>
		</div>
	</nav>
	<div class=" container page-wrapper dashboard mm-page mm-slideout" id="mm-0">
		<!-- Sidebar Backdrop -->
		<div class="sidebar-backdrop"></div>
		<!-- End User Sidebar -->
		<!-- Dashboard -->
		<section class="user-dashboard">
			<div class="dashboard-outer">
				<div class="upper-title-box">
					<h3 action='php/recruiter_action.php' value="<?php print_r($_SESSION['cust_fname']);?>">Hello
						<?php print_r($_SESSION['cust_fname']);?>!
					</h3>
					<div class="text">Ready to jump back in?</div>
				</div>


				<div class="pb-4">
					<button type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#exampleModalLong" data-aos="zoom-in" data-aos-delay="100">Post a Job</button>
						<button type="button" class="btn btn-primary ml-3" data-toggle="modal"
						data-target="#exampleModalLong1" data-aos="zoom-in" data-aos-delay="100">Feedback</button>
					<!--                <button type="button" class="btn btn-primary">Primary</button>-->
				</div>
				<!-- Modal -->
				<div class="modal fade bd-example-modal-lg" id="exampleModalLong1" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<!-- 							<div class="modal-header">
								<h5 class="modal" id="exampleModalLongTitle"></h5>

							</div> -->
							<div class="">
								<!-- 							<div class="mx-0 mx-sm-auto">
 -->
								<div class="card">
									<div class="card-header bg-primary">
										<h5 class="card-title text-white mt-2" id="exampleModalLongTitle">Feedback
											request</h5>
										<!-- 	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> -->
									</div>

									<div class="modal-body">
										<div class="text-center">
											<i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
											<p>
												<strong>Your opinion matters</strong>
											</p>
											<p>
												Have some ideas how to improve our product?
												<strong>Give us your feedback.</strong>
											</p>
										</div>

										<hr />

										<form class="px-4" action='php/feedback.php' method='POST'>
											<!-- Message input -->
											<div class="form-outline mb-4">
												<input class="form-control" type="text" name="email123" rows="1"
													value="<?php print_r($_SESSION['cust_user']);?>" ></input>
												<br>
												<input class="form-control" type="text" name="user_type123" rows="1"
													value="<?php print_r($_SESSION['user_type']);?>" ></input>
											</div>
<!-- 											<div class="form-group">
														<div class="input-group date" id="datetimepicker">
															<input name="jopening" type="text" class="form-control" value="<?php print_r($_SESSION['user_type']);?>" > 
														</div>
													</div> -->

											<p class="text-center"><strong>Your rating:</strong></p>
											<div class="form-group d-flex justify-content-center">
												<div class="form-group">
													<input type="radio" name="rating" value="1" checked />&nbsp; 1
													&nbsp;
													<input type="radio" name="rating" value="2" />&nbsp; 2 &nbsp;
													<input type="radio" name="rating" value="3" checked />&nbsp; 3
													&nbsp;
													<input type="radio" name="rating" value="4" />&nbsp; 4 &nbsp;
													<input type="radio" name="rating" value="5" checked />&nbsp; 5
													&nbsp;
												</div>
											</div>

											<p class="text-center"><strong>What could we improve?</strong></p>
											<!-- Message input -->
											<div class="form-outline mb-4">
											<div class="form-group">

												<textarea class="form-control" name="details" rows="4"></textarea>
											</div>
											</div>

									
									<div class="card-footer text-end">
										<button type="submit" class="btn btn-primary">Submit</button>
										<button type="button" class="btn btn-danger" class="close" data-dismiss="modal"
											aria-label="Close">Close</button>
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
				<!-- Modal -->
				<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLongTitle" aria-hidden="true" >  
					<div class="modal-dialog modal-lg" role="document" >
						<div class="modal-content" >
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Job Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
										aria-hidden="true">&times;</span> </button>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="job-information">
										<form class="my-login-validation" action='php/recruiter_action.php'
											method='POST'>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Job title*</label>
														<input class="form-control" type="text" name="title">
													</div>
												</div>
												<!--                                                 <div class="col-lg-12">
													<div class="form-group">
														<label>Company name</label>
														<input class="form-control" type="text" name="title"> </div>   
												</div> -->

												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label>Application Deadline</label>
														<div class="input-group date" id="datetimepicker">
															<input name="jdate" type="date" class="form-control"
																placeholder="12/11/2020"> <span
																class="input-group-addon"></span> <i
																class="bx bx-calendar"></i>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label>Job Opening</label>
														<div class="input-group date" id="datetimepicker">
															<input name="jopening" type="number" class="form-control"
																placeholder="1"> <span class="input-group-addon"></span>
															<i class="bx bx-calendar"></i>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<label>Job Description*</label>
														<textarea name="jdesc" class="form-control" rows="5"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<label>Job Category*</label>
														<select class="custom-select col-md-4" id="category" name="category" required>
															<option value="" disabled-selected hidden>Select category</option>
															<?php   // LOOP TILL END OF DATA 
															require_once('php/connection.php');


															$sql_fetch = "SELECT * FROM tbl_category where cat_status='active' ";

															$result=mysqli_query($conn,$sql_fetch);

																while($rows=$result->fetch_array())
															{ 

															?>

															<option value="<?php echo $rows['cat_id'];?>">
																<?php echo $rows['cat_name'];?>
															</option>
															<?php
															}
															?>
															</select>
													</div>
												</div>
												
												<div class="col-lg-12">
													<div class="form-group">
														<label>Job Requirement*</label>
														<textarea name="jreq" class="form-control" rows="5"></textarea>
													</div>
												</div>
												<div class="form-group m-0">
													<button class="btn btn-primary btn-block"
														type="submit">Post</button>
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
				<div class="row" data-aos="fade-right" data-aos-delay="50">
					<div class="col-lg-12">
						<!-- Ls widget -->
						<div class="ls-widget">
							<div class="tabs-box">
								<div class="widget-title">
									<h4>My Job Listings</h4>
								</div>
								<div class="widget-content">

									<div class="table-outer">
										<table class="default-table manage-job-table">
											<thead>
												<tr>
													<th>Title</th><!-- 
													<th>Applications</th> -->
													<th>Created</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												
												<?php   // LOOP TILL END OF DATA 
												$sql = "SELECT * FROM tbl_Job_details WHERE Username='$username'";
												$result = $conn->query($sql);
               									 while($rows=$result->fetch_assoc())
                									{
             										?>
												<tr>
													<!--FETCHING DATA FROM EACH 
                    								ROW OF EVERY COLUMN-->
													<td>
														<h6>
															<?php echo $rows['job_name'];?>
														</h6><i class="icon flaticon-map-locator"></i> Job name
													</td>
										<!-- 			<td class="applied">
														<?php echo "0 Applied";?>
													</td> -->
													<td>
													<?php echo $rows['job_date'];?>
													</td>
													<td class="status">Active</td>
													<td >
													<button type="button" value="<?php echo $rows['job_id'];?>" class="btn btn-primary" onclick="parent.location='applications.php?jobid=<?php echo $rows['job_id'];?>'"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<button type="button" value="<?php echo $rows['job_id'];?>" class="btn btn-danger" onclick="parent.location='php/removejob.php?jobid=<?php echo $rows['job_id'];?>'"><i class="fa fa-trash" aria-hidden="true"></i></button>
													</td>
												</tr>
												<?php
                }
             ?>


											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
	</section>
	<!-- End Dashboard -->
	</div>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- <script src="http://localhost:3002/dist/aos.js"></script> -->

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>
	<script type="text/javascript">
	</script>
</body>

</html>