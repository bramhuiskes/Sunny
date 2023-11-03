<?php
// Required variables for the contact page.
$req_var = array("name", "email", "message");

// Array with sanitized data.
$san_arr = array();

// Check for all required variables, if not all of them are found return to contact.php with error message.
for($i = 0; $i < count($req_var); $i++){
    if(!isset($_POST[$req_var[$i]]))
    {
        http_response_code(403);
        header("Location: ../Contact.php?status=failed");
        Die();
    }
    else{
        $temp_arr = array($req_var[$i] => sanitizeInput($_POST[$req_var[$i]]));
        $san_arr = $san_arr + $temp_arr;
    }
}

function sanitizeInput($input) {
  $input = trim($input);

  $input = stripslashes($input);

  $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

  return $input;
}

session_start();

$_SESSION['contactData'] = $san_arr;

header('Location: ../contact.php?status=correct');

?>