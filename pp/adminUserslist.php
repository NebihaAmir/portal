<!--  -->
<?php
$lurl=get_fcontent("https://app.icraftsoft.net:9090/rest/employees");
function get_fcontent( $url) {
  $ch = curl_init(); //curl_init — Initialize a cURL session
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );  
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  # required for https urls
  curl_setopt($ch,  CURLOPT_HTTPHEADER, array( 'Authorization: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA',
        'Content-Type: application/json'));
  $content = curl_exec( $ch );

   $array = json_decode($content, true);
  // $id = $row['id'];
// echo "<h3 class='offset col-md-12'> Profile </h3>";
 echo "<div class='col-sm-12'> ";
 
 echo "<table class='table table-striped '>"; 
 echo "<thead class='thead-dark'>
    <tr>
     
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Middle Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>Address</th>
      <th scope='col'>City</th>
      <th scope='col'>State</th>      
      <th scope='col'>Delete User</th>
    </tr>
  </thead>";
foreach($array as $val)
{

     $id = $val['id'];

    echo '<tr>';
         // echo '<td colspan="6">'.$val['id'].'</td>';
    echo '<td>'. htmlspecialchars($val['firstname']) .'</td>';
    echo '<td>'. htmlspecialchars($val['lastname']) .'</td>';
    echo '<td>'. htmlspecialchars($val['middlename']) .'</td>';
    echo '<td>'. htmlspecialchars($val['email']) .'</td>';
    echo '<td>'. htmlspecialchars($val['address']) .'</td>';
    echo '<td>'. htmlspecialchars($val['city']) .'</td>';
    echo '<td>'. htmlspecialchars($val['state']) .'</td>';
    echo "<td> <a  class='btn btn-danger' href=userList.php?id=".$id.">delete</a></td>";
 
  
}
echo "</tr>";
echo "</table>";
// echo "</div>";
echo "</div>";

}


?>
