<?php

$cars = $_POST['cars'];
$miles = $_POST['miles'];
$barrels = $_POST['barrels'];
$email = $_POST['email'];
$metrics = $_POST['metrics'];
$hours = $_POST['hours'];

$subject = 'Solad Carbon Emissions Savings Report';


$message = "
<html>
<head>
  <title>Solad Carbon Emissions Savings Report</title>
</head>
    <body>
       

        <table border='1' style='text-align: center;'>
            <tr>
                <p>We are please to attach your carbon emissions savings report.</p>
            </tr>
            <tr>
                <td style='color: white; background-color:grey;'>Solad Carbon Emissions Savings Calculator</td>
            </tr>
            <tr>
                <td style='color: white; background-color:#9C9C9C;'>For <strong> . $hours . </strong> hours of power: </td>
            </tr>
            <tr>
                <td style='color: white; background-color:#9C9C9C;'>Using a diesel generator, your annual carbon emissions would be: <strong>.$metrics. </strong> metric tonnes of CO2, equivalent to...</td>
            </tr>
            <tr>
                <td style='color: white; background-color:#9C9C9C;'>Reducing oil consumption by <strong> .$barrels. </strong> barrels of oil, or</td>
            </tr>
            <tr>
                <td style='color: white; background-color:#9C9C9C;'>Removing <strong> . $cars .</strong> cars from the road, or</td>
            </tr>
            <tr>
                <td style='color: white; background-color:#9C9C9C;'>Eliminating <strong> . $miles .</strong> km of vehicle passenger miles</td>
            </tr>
        </table>
        <p>
            Note:
        </p>
        <p>
            
            This greenhouse gas equivalency calculator can help you understand what reducing carbon emissions means in everyday terms. It is based on publicly-available data and utilizes the emission factors method of carbon accounting. It is for marketing purposes only and is not considered adequate for regulatory, investment or legal purposes.

        </p>
        <p>
            This is analysis is for marketing purposes only. It should not be considered adequate for regulatory, investment or legal purposes. We are happy to provide our underlying assumptions and calculations upon request.

        </p>
      
    </body>
</html>";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To:<' .$email. '>';
$headers[] = 'From: Solad Power Holdings <solad@xyluz.com>';
$headers[] = 'Bcc: xyluz@ymail.com';


if(mail($to, $subject, $message, implode("\r\n", $headers))) {
    
	echo 'done';

} else {

    echo 'not';

}

