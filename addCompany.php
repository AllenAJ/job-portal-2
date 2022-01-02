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


    <div class="container mt-4">
    <div class="card mt-4">
              
              <div class="card-body tab-content">
                <div class="tab-pane active show" id="billing">
                    
                  <h6>Please fill Company details</h6>
                  <hr>
                  <form action='php/addCompany_action.php' method='POST' enctype="multipart/form-data">
                                <div class="form-group"> 
                                    <label for="username"><h6>Company Name</h6> </label> 
                                    <input type="text" name="Comname" placeholder="company name" class="form-control required"> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber"><h6>Company Website</h6></label>
                                    <div class="input-group"> 
                                    <input type="text" name="ComWebsite" placeholder="valid company website" class="form-control " required>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber"><h6>Company Description</h6></label>
                                    <div class="input-group"> 
                                    <input type="textarea" name="ComDesc" placeholder="company details" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Company Location</h6>
                                                </span></label>
                                            <div class="input-group"> 
                                            
                                            <input type="text" placeholder="location" name="ComLocation" class="form-control" required> 
                                            <!-- <input type="number" placeholder="YY" name="" class="form-control" required>  --></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> 
                                            <label data-toggle="tooltip" >
                                                <h6>Company Logo <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> 
                                            
                                            <input accept="image/*" type="file" class="" id="inputGroupFile02" name="img" accept=".jpg, .png, .jpeg" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer"> 
                                    <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                </div>
              </div>
            </div>
    </div>

    </body>
</html>