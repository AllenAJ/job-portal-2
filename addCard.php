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
                    
                  <h6>BILLING SETTINGS</h6>
                  <hr>
                  <form action='php/addCard_action.php' method='POST'>
                                <div class="form-group"> 
                                    <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> 
                                    
                                    <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> 
                                        
                                    <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " minlength="16" maxlength="16" required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> 
                                            
                                            <input type="month" placeholder="MM/YY" name="expDate" class="form-control" required> 
                                            <!-- <input type="number" placeholder="YY" name="" class="form-control" required>  --></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> 
                                            
                                            <input type="password" required class="form-control" placeholder="***" name="cvv" maxlength="3" > </div>
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