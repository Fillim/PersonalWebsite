<?php
session_start();
session_unregister("user");
echo"<script>window.location.href='enter.php';</script>";	

?>

