
<!DOCTYPE html>
<html>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

<head>
  <title></title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Employee Mangement Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>      
    </ul>
  </div>
</nav>
<div class="col-sm-12">
<div class="container"> 


   <div class="col-sm-10">
   <img src="img/craft.png" class="grid-container">
   <div class="col-sm-4"> 
   </div>
   </div>
    
<?php include 'adminUserslist.php' ?>
 

<?php 
if(isset($_GET["id"])){
$url="https://app.icraftsoft.net:9090/rest/employee/".$_GET["id"];
// print_r($url);
$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 curl_setopt($ch,  CURLOPT_HTTPHEADER, array( 'Authorization: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA',
          'Content-Type: application/json'));
        
$result = curl_exec($ch);
if ($result === FALSE) {
  die(curl_error($ch));
}else{
  echo "<script>window.open('userList.php','_self')</script>";
}
}
?>


  

<!-- </div> -->
</div>
</div>

</body>
</html>