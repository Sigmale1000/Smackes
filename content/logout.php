<?php

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
sleep(1.5);
$_SESSION['username'] = ''
?>
<?php
// Redirect to login page
header('Location: index.php?p=login');

?>