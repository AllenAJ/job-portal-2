<?php
require_once('php/admin_cat_fetch.php');
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}


/* $cust_id=$_GET['custid'];
 */
$sql = "SELECT * FROM tbl_category WHERE cat_id='$cust_id'";
$result = $conn->query($sql);
/* $conn->close();  */
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

    <div class="container">
    <div class="card">
      <div class="card-body">
      <a href="admin.php" class="btn btn-primary mb-3"><i class="fa fa-arrow-left"></i></a>
      <h4 class="card-title mb-4">EDIT Category</h4>
      <form action='php/admin_cat_update.php' method='POST'>

        <div class="form-group" >
        <label>Category Name</label>
			  	<input  type="text" class="form-control" value="<?php echo $cat_name ?>" name="cat_name" >
        </div>    
 
        <div class="form-group">
        <label>Category ID</label>
			  	<input style="pointer-events:none;" type="text" class="form-control" value="<?php echo $cat_id ?>" name="cat_id">
        </div>   
   



		<button class="btn btn-primary btn-block mb-3" type='submit'>Update</button>
    
        </form>


        <?php
                            if($status=='active')
                            {
                            ?>
        <form action='php/admin_cat_remove.php?custid=<?php echo $cust_id ?>' method='POST'>
        <button  href="" class="btn btn-danger btn-block">Deactivate</button>
        </form>

        <?php
                            }
                            else
                            {
                            ?>
        <form action='php/admin_cat_remove2.php?custid=<?php echo $cust_id ?>' method='POST'>
        <button href="" class="btn btn-success btn-block">Activate</button>
        </form>
        <?php
                            }
                            ?> 

      </div> <!-- card-body.// -->
    </div>
    </div>

</body>
</html>
