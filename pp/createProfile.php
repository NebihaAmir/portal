
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style type="text/css">
    
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
    <form action="createProfile.php" method="post">
    <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Firstname</label>
      <input type="text" required="" class="form-control" ng-model= "firstname" name="firstname" id="firstname" placeholder="Firstname">
    </div>

  </div>

   <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Lastname</label>
      <input type="text" required="" name="lastname" class="form-control" id="lastname" placeholder="Lastname">
    </div>
  
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Middlename</label>
      <input type="text" required="" name="middlename"  ng-model= "middlename" class="form-control" id="middlename" placeholder="Middlename">
    </div>
  
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Address</label>
      <input type="text" required="" class="form-control" name="address" id="address" placeholder="Address">
    </div>

  </div>


  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Email</label>
      <input type="email" required="" class="form-control"  name="email" id="email" placeholder="Email">
    </div>

  </div>
   <div class="form-group col-md-8">
      <label for="inputState">State</label>
      <select  name="state" required="" id="state" class="form-control">
        <option selected>Choose...</option>
       <!--  <option>Minisota</option> -->
        <option>New York</option>
        <option>California</option>
         <option>Texas</option>
        <option>Virginia</option>
        <option>California</option>

      </select>
    </div>
   <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">City</label>
      <input type="text" required="" class="form-control" name="city" id="city" placeholder="City">
    </div>

  </div>
  
        
     <div class="form-group col-md-8">
     <div class="col-sm-2"></div>
      <div class="col-sm-6"><button type="submit" name="submit" onclick="" class="btn btn-primary btn-block">Create Profile</button></div> 
    </div>
  </div>

  <?php include 'createuser.php';  ?>
  <!--  -->
</form>  
</div>
</div>

</body>
</html>