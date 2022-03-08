<?php
include('Mail.php');

$host = "smtp.office365.com";
$port = 587;
$username = "support@pet24care.com";
$password = "GoodThings@2019";
$smtp = Mail::factory('smtp',
    array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));
//$to = "Mintu <mintu.bora@outlook.com>";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['email'];
$compname=$_POST['compname'];
$countryname=$_POST['countryname'];
$phoneno=$_POST['phoneno'];
$message =$_POST['comments'];

$to = "mintu@positra.com";
//$firstname="test";
//$lastname="test";
//$mail="hellotest@yopmail.com";
//$compname="no comp";
//$countryname="asdasd";
//$phoneno="77777777777";
//$message ="asdasdasds";


$eMsg = '<table border="0">
                <tr>
                <td width="170"></td>
                <td width="20"></td>
                <td width="300"></td>
                </tr>
                <tr>
                <td>Name</td>
                <td></td>
                <td style="text-transform: capitalize;">'.$firstname.' '.$lastname.'</td>
                </tr>
                <tr>
                <td>Company Name</td>
                <td></td>
                <td>'.$compname.'</td>
                </tr>
                <tr>
                <td>Email</td>
                <td></td>
                <td>'.$mail.'</td>
                </tr>
                <tr>
                <td>Phone</td>
                <td></td>
                <td>'.$phoneno.'</td>
                </tr>
                <tr>
                <td>Country Name</td>
                <td></td>
                <td>'.$countryname.'</td>
                </tr>
                <tr>
                <td>Comments</td>
                <td></td>
                <td>'.$message.'</td>
                </tr></table>'; 
 
 $from = "support@pet24care.com";
 $subject = $firstname . " reached us (Dastbi web).";
 $body = str_replace("\n.", "\n..", $eMsg);
 
// $host = "smtp.office365.com";
// $port = 587;
// $username = "support@pet24care.com";
// $password = "GoodThings@2019";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject,
   'MIME-Version' => '1.0',
   'Content-Type' => 'text/html; charset=ISO-8859-1',
   'Content-Transfer-Encoding' => '8bit;');

 
 $mail = $smtp->send($to, $headers, $body);
//printf($mail->getMessage());
 if (PEAR::isError($mail)) {
   echo("<p class='alert alert-danger'>There was an error while submitting the form. Please try again later.</p>");
  } else {
   echo("<p class='alert alert-success'>Thank you for your interest! We will contact you within the next 12 hours.</p>");
  }
 ?>