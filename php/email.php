<?php
$subject    = 'E-mail from Portfolio'; // Subject of your email
$to         = 'plantain@umich.edu'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_REQUEST['name'] . ' <br/>' .
              'E-mail: ' . $_REQUEST['email'] . ' <br/>' .
              'Phone: ' . $_REQUEST['phone'] . ' <br/>' .
              'Message: ' . $_REQUEST['message'];
if (@mail($to, $subject, $message, $headers))
{
 echo 'sent';
}
else
{
 echo 'failed';
}
?>
