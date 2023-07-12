<?php
  session_start();
  session_destroy();
  header("location: privacy policy login.php");
?>