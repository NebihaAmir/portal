<?php 
if (isset($_POST['submit'])) {
  $url = 'https://app.icraftsoft.net:9090/rest/employee';

 $firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
 $middlename =$_POST['middlename'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $city = $_POST['city']; 
   $email = $_POST['email'];

    $data = array(
    'firstname' => $firstname,
    'lastname' => $lastname,
    'middlename' => $middlename,
    'address' => $address,
    'state' => $state,
    'city' => $city,
    'email' => $email
  
);


    $ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA',
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($data)
));

$result = curl_exec($ch);

if ($result === FALSE) {
  die(curl_error($ch));
}else{
  // echo "<script>alert('You have successfully Create your Profile!')</script>";
  // echo "<script>window.open('create.php','_self')</script>";
  echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

        <div class='modal fade' id='myModal' role='dialog'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-body'>
                  <p>You have created your Profile. Thank You !</p>
                </div>
                    <div class='modal-footer'>
                        <a href='index.php'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>OK</button>
                         </a>
                    </div>
                </div>
            </div>
        </div>"; 
}
}

?>