<?php
require_once('php/jobseeker_debugger_action.php');


 if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
} 

$username=$_SESSION['cust_user'];


/* $sql = "SELECT * FROM tbl_Job_details where status='active' ";
$result = $conn->query($sql); */
//$conn->close(); 

if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case '1':
            $sql = "SELECT * FROM tbl_Job_details where status='active' AND cat_id='1' ";
            $result = $conn->query($sql);
            break;
        case '2':
            $sql = "SELECT * FROM tbl_Job_details where status='active' AND cat_id='2' ";
            $result = $conn->query($sql);
            break;
        case '3':
            $sql = "SELECT * FROM tbl_Job_details where status='active' AND cat_id='3' ";
            $result = $conn->query($sql);
            break;
        case '4':
            $sql = "SELECT * FROM tbl_Job_details where status='active' AND cat_id='4' ";
            $result = $conn->query($sql);
            break;
        
        default:
        $sql = "SELECT * FROM tbl_Job_details where status='active' ";
        $result = $conn->query($sql);
            # code...
            break;
    }
}else{
    $sql = "SELECT * FROM tbl_Job_details where status='active' ";
    $result = $conn->query($sql);

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
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">

            </ul>
        </div>
    </nav>

    <!-- Title -->
    <div class="container mt-5">

        <div class="text-center">
        <div class="pb-4">
					<button type="button" class="btn btn-primary" onclick="parent.location='jobseekerd.php'">Go Back</button>
					<!--                <button type="button" class="btn btn-primary">Primary</button>-->
				</div>
                <?php 
                                 if(isset($_SESSION['status4'])){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <?php       echo $_SESSION['status4'];
                                                unset($_SESSION['status4']);
                                    ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>          
                                        <?php   
                                 }
                                ?>
                                <?php 
                                 if(isset($_SESSION['status5'])){
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    <?php       echo $_SESSION['status5'];
                                                unset($_SESSION['status5']);
                                    ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>          
                                        <?php   
                                 }
                                ?>
            <h1 class="h2">Job Listing</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>List of available jobs are given below
            </p>
        </div>
    </div>

    <section class="job-listing-area ptb-100">
        <div class="container d-flex justify-content-center">
        <form class="" method="post" action="jobseeker.php">
            <div class="row">
                <div class="col-lg">
                <label>Job Category*</label>
														<select class="custom-select col-md-4" id="select1" name="select1" required>
															<option value="" disabled-selected hidden>Select category</option>
															<?php   // LOOP TILL END OF DATA 
															require_once('php/connection.php');


															$sql_fetch = "SELECT * FROM tbl_category where cat_status='active' ";

															$result123=mysqli_query($conn,$sql_fetch);

																while($rows123=$result123->fetch_array())
															{ 

															?>

															<option value="<?php echo $rows123['cat_id'];?>">
																<?php echo $rows123['cat_name'];?>
															</option>
															<?php
															}
															?>
															</select>   
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-search"></i>
                                    Search Jobs
                                </button> 
                                </form>

                    <div class="mt-3">
                        <div class="row align-items-center">
                        <div class="col-lg-12">
						<!-- Ls widget -->
						<div class="">
							<div class="">
								<div class="">

									<div class="">
										<table class="default-table manage-job-table">
											<tbody>
																								
                                            <?php   // LOOP TILL END OF DATA 
               									 while($rows=$result->fetch_assoc())
                									{
                                                        $temp_username=$rows['Username'];
                                                        $sql_fetch_pay="SELECT * FROM tbl_company WHERE Username='$temp_username'";
                                                        $sql_exe_pay=mysqli_query($conn,$sql_fetch_pay);
                                                        $pay=$sql_exe_pay->fetch_assoc();
                                                        
/*                                                         $sql2 = "SELECT * FROM tbl_company where Username= '$temp_username'";
                                                        $result2 = $conn->query($sql2);   */
/*                                                         $myQuery = "SELECT * FROM tbl_company where Username= '$temp_username'";
                                                        $result = mysql_query($myQuery);
                                                        $row = mysql_fetch_assoc($result); */
             										?>
                                                     <div class="hot-jobs-list">
                        <div class="row align-items-center">
                             <div class="col-lg-2">
                                <a href="job-details.html" class="hot-jobs-img pt-3">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pay['company_image']); ?>"
                                        alt="Image" height="64" height="59">
                                </a>
                            </div> 
                            <div class="col-lg-6">
                                <div class="hot-jobs-content">
                                    <h3><a href=""><?php echo $rows['job_name'];?></a></h3>
                                    <span class="sub-title">Job Openings: <?php echo $rows['job_opening'];?></span> 

                                    <ul>
                                        <li><span class="sub-title">Company name: <?php echo $pay['company_name'];?></span> </li>
                                        <li><span>Posted by: </span> <?php echo $rows['Username'];?></li>
                                        <li style="display:block;text-overflow: ellipsis;width: 600px;overflow: hidden; white-space: nowrap;"><span  >Experience: </span><?php echo $rows['job_requirement'];?></li>
                                        <li><span>Location: </span>Remote</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 ml-auto">
                                <div class="hot-jobs-btn text-right">
                                    <a href="<?php ?>jobdetails.php?job=<?php echo $rows['job_id'];?>&view=personalinfo" class="btn btn-primary">Browse Job</a>
                                    <!-- <p><span>Deadline: </span>Dec 30, 2020</p> -->
                                </div>
                            </div>
                        </div>
                    </div>

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

            </div>
        </div>
    </section>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
   <!--  <script src="server.js"></script> -->
    <script>
</body>

</html>