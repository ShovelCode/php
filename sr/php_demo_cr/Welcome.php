<?php
 session_start();
 echo "Welcome ".$_SESSION['FIRST'];
 session_destroy();
?>