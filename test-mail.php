<?php 
	
$from= "info@ivftreatmentinindia.com";
$bcc="gulshan.zealth@gmail.com";
$to="sana.techknowten@gmail.com";
$subject ="Test Email123";
$body = '<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>';


$headers  = 'MIME-Version: 1.0' . PHP_EOL;
$headers = "From:  $fromname<". strip_tags($from) . "> \r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "BCC: ".$bcc."\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$email_response = mail($to, $subject, $body, $headers);
		
		
		
		?>