<?php  


$email = $_POST['email'];




$to = $email; // note the comma

// Subject
$subject = 'Solad Carbon Emissions Savings Report';

// Message
$message = "
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>
  	Hello ' . $name . ' your submission was successful, use the barcode below to get your discount <br /> <br /> ' . $barcode_image .'<p><strong>Your Information:</strong><br /> <strong>Name</strong> : ' . $name .' <br /><strong>Email</strong> : ' . $email .'<br /><strong>Phone</strong> :'. $phone  .'<br /><strong>Date of Birth</strong> :' . $dob . '<br /><strong>Gender</strong> :'.$gender.'<br /><strong>Address</strong> :'.$address.'</p></p></body></html>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To:<' .$email. '>';
$headers[] = 'From: Solad Power Holdings <solad@xyluz.com>';
$headers[] = 'Bcc: xyluz@ymail.com';

// Mail it


if(mail($to, $subject, $message, implode("\r\n", $headers))) {
    
	echo 'done';

} else {

    echo 'not';

}