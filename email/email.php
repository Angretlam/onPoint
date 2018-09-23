<?php
if ($_GET['Email']) {
  $headers = "From: abstract_submit@yahoo.com \r\n";
  $headers .= "Reply-To: peoples.connor@gmail.com \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message =  'Name: ' . $_GET['Name'];
  $message .=  '<br />Business: ' . $_GET['Business'];
  $message .= '<br />Email: ' . $_GET['Email'];
  $message .= '<br />Phone: ' . $_GET['Phone'];
  $message .= '<br /><br />Address:<br />' . $_GET['Address_1'];
  if ($_GET['Address_2']) {$message .= '<br />' . $_GET['Address_2'];}
  $message .= '<br />' . $_GET['City'] . ', ' . $_GET['County'] . ' ' . $_GET['Zipcode'];
  $message .= '<br /><br />Services: ' . $_GET['Services'];

  $retval = mail('peoples.connor@gmail.com','A new order request', $message, $headers);

  if ($retval) {
    echo 1;
  } else {
    echo 0;
  }
} else {
  echo 'Invalid Response';
}

?>
