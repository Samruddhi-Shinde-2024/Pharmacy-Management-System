<?php
  $SERVER = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '';
  $DB = 'pharmacy';

  @$con = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB)
  or
  die("<div class='text-danger text-center h5'>Oops, Unable to connect with database!</div>");

  if(isset($_GET['action']) && $_GET['action'] == 'is_logged_in') {
    if(session_status() == PHP_SESSION_NONE)
      session_start();

    echo (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) ? "true" : "false";
  }
?>
