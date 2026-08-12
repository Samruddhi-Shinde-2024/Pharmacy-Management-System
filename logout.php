<?php
  if(session_status() == PHP_SESSION_NONE)
    session_start();

  require "php/db_connection.php";

  $_SESSION = array();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
    <script src="js/restrict.js"></script>
  </head>
  <body>

  </body>
</html>
