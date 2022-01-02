<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Bootstrap Theme</title>
    <script>
/* function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
        console.log(re.test(email));
    } */

</script>
</head>

<body>
    <!-- SIMPLE NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="./home.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <!---Simple Login and Register-->
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="h2">Welcome to Job Portal</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>Please login or signup
            </p>
        </div>
    </div>
    <div class="container h-100 mt-5">
        <div class="row justify-content-md-center h-100">
            <!---Simple Login-->
            <div class="column p-5" style="max-width: 440px;">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form class="my-login-validation" action='php/login_action.php' method='POST'>
                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="email1" type="email" class="form-control" name="email1" placeholder="Email" autofocus="" required>
                                </div>
                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div style="position:relative">
                                        <input id="password1" type="password" class="form-control" name="password1"
                                            style="padding-right: 60px;" placeholder="****" required>
                                    </div>
                                </div>
                                <!-- Login Btn -->
                                <div class="form-group m-0">
                                    <button class="btn btn-primary btn-block"
                                    type="submit" >Login</button>
                                </div>
                                <!-- Login with Google Btn -->
                                <div class="form-group mt-4">
                                 <div class="success">
                                 <?php 
                                 if(isset($_SESSION['status'])){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php       echo $_SESSION['status'];
                                                unset($_SESSION['status']);
                                    ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>          
                                        <?php   
                                 }
                                ?>
                                </div>                                
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!---Simple Register-->
            <div class="column p-5" style="max-width: 440px;">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form name="myForm" class="my-login-validation" action='php/register_action.php' method='POST' autocomplete="on">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="email">First name</label>
                                            <input id="fname" name="fname" type="text" class="form-control" required="" placeholder="First name" autocomplete="on">
                                        </div>
                                        <div class="col">
                                            <label for="email">Second name</label>
                                            <input id="lname" name="lname" type="text" class="form-control" required="" placeholder="Last name" autocomplete="on">
                                        </div>
                                    </div>
                                </div>
                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email2" type="email" class="form-control" name="email2" value="" required="" autofocus="" placeholder="Email" autocomplete="on">
                                </div>
                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div style="position:relative">
                                    <input id="password2" type="password" class="form-control" placeholder="****" name="password2" style="padding-right: 60px;" minlength="8">
                                    </div>
                                </div>
                                <!-- PhoneNo Input -->
                                <div class="form-group">
                                    <label for="ph_no">Phone Number</label>
                                    <input id="ph_no" type="tel" class="form-control" placeholder="..." name="ph_no" value="" required="" autofocus="" minlength="10" maxlength="10" autocomplete="on">
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="radio" name="usertype" value="Recruiter" checked />&nbsp;  Recruiter &nbsp; 
                                        <input type="radio" name="usertype" value="Job Seeker" />&nbsp;  Job Seeker &nbsp; 
                                    </div>
                                </div>


                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                    <?php 
                                 if(isset($_SESSION['status2'])){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <?php       echo $_SESSION['status2'];
                                                unset($_SESSION['status2']);
                                    ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>          
                                        <?php   
                                 }
                                ?>
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
   <!--  <script src="server.js"></script> -->
    <script>
    </script>


</body>

</html>