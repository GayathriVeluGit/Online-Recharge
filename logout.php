<?php
session_start();
unset($_SESSION['AID']);
unset($_SESSION['UID']);
session_destroy();
header("location:index.php");
?>