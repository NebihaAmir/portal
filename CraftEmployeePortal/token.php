<!--  -->

<?php
// session_start();
 // $header = array();
 // $header ['user_token'] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA'; 
	// function getToken(){
	// 	if (!isset($_SESSION ['user_token']))
	//  {
	// 		$_SESSION['user_token'] = 'Authorization: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
	// 	}
	// }
// int $token;
	function checkToken($token = 'Authorization:Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA'){
		$_SESSION['user_token'] = 'Authorization:Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
		if ($token != $_SESSION['user_token'])
	 {
			// header('location: 404.php');
	 		header("Location:404.php");
			exit;
		}
		else{
			header("Location:dashbord.php");
		}

	}

	// function refreshToken(){
	// 	curl --request POST \
 //  		--url 'https://app.icraftsoft.net:9090/token' \
 //  		--header 'content-type: application/json' \
 //  		--data '{ "client_id": "YOUR_CLIENT_ID", "client_secret": "YOUR_CLIENT_SECRET", "token": "YOUR_REFRESH_TOKEN" }'
		//Refresh the token


	// }


?>