
<?php

include 'token.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login </title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="CraftEmployeePortal/assets/css/style.css">
<!-- <link rel="stylesheet" href="../css/style.css"> -->
<script type="text/javascript">
	
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>
<body>

<div class="login-page">
  <div class="form">

	<form method="post" action="CraftEmployeePortal/userDashbord.php">		
	<input type="text" required="" name="username" placeholder="Enter Username"/>
      <input type="password" required="" name="password" placeholder="Enter Password"/>
      <button type="submit" name="submit" onclick="" class="btn btn-primary btn-block">Login</button>

	</form>

	</div>
	</div>
	
</body>
<?php 
	 if (isset($_POST['submit'])) {
	 	checkToken();
	

  }
?>

</html>
