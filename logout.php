<?php
//include the session to notice that the session is already in progres
include('includes/session.php');
//after the logout button clicked destroy the session.
session_destroy();
header('Location: login.php');
?>