<?php
session_start();  
echo "Logged out successfully"; 
unset($_SESSION["sid"]);
echo "Cleared Session";
?>
