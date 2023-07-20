<?php session_start();
unset($_SESSION['username']);
header( 'Location: home_admin.php' );
?>
