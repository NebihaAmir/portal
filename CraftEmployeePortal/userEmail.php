
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style type="text/css">
    .container{
  
  height: 600px;
}
  </style>

<head>
  <title></title>
</head>
<body>
<div class="col-sm-2"></div>

<?php include 'nav.php' ?>
<div class="container">

<div class="col-sm-12">
  <div  class="col-sm-3" class="bot"></div> 
  <div  class="col-sm-8" class="formUi">
    <img src="img/craft.png" class="grid-container">
           <div class="form-group col-sm-8">
            <div class="modal-footer">
            <!-- <div class="wrapper-div">  -->     
          
                <form method="post" action="userEmail.php">
                    <div class="col-sm-12">
                    <div class="col-sm-8"><h4 for="inputEmail4">Enter Your Email </h4></div><div class="col-sm-4"></div> </div> 
                    <div class="col-sm-12"><input type="email" required="" class="form-control" name="email" id="email" placeholder="User Email"></div> 
                   <div class="col-sm-3"></div> <div class="col-sm-5"><input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit" style="margin-top: 20px;"></div>
                </form>
            <!-- </div> -->
            </div>
          </div>
  
  </div>

  <?php include 'createuser.php';  ?>
  <!--  -->

</div>
</div>

</body>
</html>