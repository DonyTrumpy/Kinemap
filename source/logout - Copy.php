<?php
include 'config.php';

   session_destroy();

 // Jump to login page
    $str = 'login.php?s=lot';
    redirect($str);
  ?>