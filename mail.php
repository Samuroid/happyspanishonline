<?php
/*
    Security Validation Cleanup.
    Function to clean up the users inputted data.
*/
function cleanData($data) {
  $data = trim($data); // trim whitespace
  $data = stripslashes($data); // remove blackslashes
  $data = htmlspecialchars($data); // coverts html to chars
  return $data;
}

// Initialies variables
$nameEr = $emailEr = $subjectEr = $messageEr = $gtokenEr = "";
$name = $email = $subject = $message = $gtoken = "";
$response = [];


// Check we are in POST method.
if( $_SERVER["REQUEST_METHOD"] == "POST" ){

  //check ame field, populate $name if not empty.
  if( empty($_POST['name']) ){
    $nameEr = "Name is required";
  }else{
    $name = cleanData( $_POST['name'] );
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameEr = "Please enter a valid name. Only Letters and spaces allowed.";
    }
  }

  if( empty($_POST['email']) ){
    $emailEr = "Email is required";
  }else{
    $email = cleanData( $_POST['email'] );
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailEr = "Please enter a valid email address.";
    }
  }

  if( empty(cleanData( $_POST['subject'] )) ){
    $subjectEr = "Subject is required.";
  }else{
    $subject = cleanData( $_POST['subject'] );
  }

  if( empty(cleanData( $_POST['message'] )) ){
    $messageEr = "Message is required.";
  }else{
    $message = cleanData( $_POST['message'] );
  }

  if( empty( $_POST['g-token'] ) ){
    $gtokenEr = "G-token required. Contact webmanager.";
  }else{
    $gtoken = $_POST['g-token'];
    $secret = '6LdnzOkUAAAAALb1Rzv94ptuVOwIYnDs5B-SUP6O';
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $secret,
        'response' => $gtoken,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ); // data keys
    $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
    );
    $ch = curl_init();
    curl_setopt_array($ch, $curlConfig);
    $request = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($request);

    if ( $response->success === true ){
      if ( $response->score >= 0.5 ){ // send mail
        $content="From: $name \n \nEmail: $email \n \nMessage:\n $message";
        $recipient = "samwbru@gmail.com";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $content, $mailheader) or die("Error!");
        $gtokenEr = "Mail successfully sent. Macarena will get back to you shortly :)";
        // reset form
        $name = $email = $subject = $message = $gtoken = "";
      } else {
        $gtokenEr = "Not Verified - score too low.";
        // exit;
      }
    }else{ // if success == false
      // print_r( $recaptcha );
      // print json_encode( array('message' => 'recaptcha failed to verify', 'code' => 0 ));

      $gtokenEr = "recaptcha failed to verify" . var_dump( $response );
      // exit;
    }
  }

} // if "POST"

?>
