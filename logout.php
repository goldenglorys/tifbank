<?php session_start();
session_unset();
session_destroy();
// unset($_SESSION['email']); this unset a single variable of session set
include 'index.php';
?>