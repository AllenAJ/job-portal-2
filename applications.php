<?php

require_once('php/app_jid.php');
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

$job_id=$_GET['jobid'];

$sql = "SELECT * FROM tbl_application where job_id='$job_id'";
$result = $conn->query($sql);
$conn->close(); 
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
    <style>
        .candidates-single-listing {
            padding: 30px;
            background-color: #fff;
            -webkit-box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
            box-shadow: 0 5px 20px 3px rgb(230 233 249 / 90%);
            -webkit-transition: all ease .5s;
            transition: all ease .5s;
            border-radius: 30px 0 30px 0;
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .candidates-single-listing .featured.red {
            background-color: #ed1d24;
        }

        .candidates-single-listing .featured {
            position: absolute;
            top: 15px;
            left: -72px;
            background-color: #2042e3;
            color: #fff;
            padding: 1px 40px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            font-size: 14px;
            width: 200px;
            text-align: center;
        }

        transform: rotate(-45deg);
        font-size: 14px;
        width: 200px;
        text-align: center;
        }

        .default-btn {
            font-size: 16px;
            color: #fff;
            line-height: 1;
            -webkit-transition: all ease .5s;
            transition: all ease .5s;
            text-align: center;
            background-color: #2042e3;
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: inline-table;
            padding: 15px 40px;
            border-radius: 4px;
        }

        .candidates-listing-area .candidates-single-listing .default-btn {
            float: right;
        }

        .candidates-single-listing .default-btn {
            float: unset;
            width: 100%;
        }

        .default-btn:hover {
            background-color: #1a1a1a;
            color: #fff;
        }

        .candidates-single-listing .hot-jobs-img img {
            border-radius: 20px 0 20px 0;
        }

        .default-btn:hover {
            background-color: #1a1a1a;
            color: #fff;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .default-btn {
            font-size: 16px;
            color: #fff;
            line-height: 1;
            -webkit-transition: all ease .5s;
            transition: all ease .5s;
            text-align: center;
            background-color: #2042e3;
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: inline-table;
            padding: 15px 40px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <!-- SIMPLE NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container"> <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
                <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Find a Job</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Recruit</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Find a Job</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
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


                <div class="pb-4">
                    <button type="button" class="btn btn-primary" onclick="parent.location='recruiter.php'">Go
                        back</button>
                    <!--                <button type="button" class="btn btn-primary">Primary</button>-->
                </div>
                <div class="ls-widget ">
                <div class="widget-title">
                                    <h4>Applications </h4>
                                </div>
                <div class="widget-content  pl-5 pb-5 pr-5">


                <?php   // LOOP TILL END OF DATA 
               									 while($rows=$result->fetch_assoc())
                									{
             										?>
                <div class="candidates-single-listing">
                    <div class="row align-items-center" >
<!--                         <div class="col-lg-2">
                            <div class="hot-jobs-img">
                                <img src="https://templates.envytheme.com/jubi/default/assets/images/candidates-listing/candidates-listing-1.jpg"
                                    alt="Image">
                            </div>
                        </div> -->
                        <div class="col-lg-6">
                            <div class="candidates-cv-content mt-3">
                                <h3 style="font-size: 20px;"><?php echo $rows['fname'];?> <?php echo $rows['lname'];?></h3>
                                <span class="sub-title"><?php echo $rows['email'];?></span>
                                <ul>
                                    <li><span><b>Status: </b></span><span style="color: green;"><?php echo $rows['status'];?><span></li>
                                </ul>
                                <p style="color: rgba(0,0,0,.6);"><?php echo $rows['note'];?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <a href="php/pdf/<?php echo ($rows['resume2']);?>" class="default-btn mt-3">Download Resume</a>
                            <div class="row d-flex justify-content-center mt-2" >

								<button type="button" class="btn btn-success m-1" onclick="parent.location='php/app_status.php?appid=<?php echo $rows['app_id'];?>&status=Accepted'"><i class="fa fa-check" aria-hidden="true"></i></button>
						        <button type="button" class="btn btn-danger m-1" onclick="parent.location='php/app_status.php?appid=<?php echo $rows['app_id'];?>&status=Rejected'"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </div>

                        </div>
                    </div>
                    <span class="featured ">Candidate</span>
                </div>
                <?php
                }
             ?>
             </div>
             </div>


            </div>
    </div>
    </section>
    <!-- End Dashboard -->
    </div>
    <script type="text/javascript">
    </script>
</body>

</html>