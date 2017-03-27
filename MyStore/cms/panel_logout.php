<?php
session_start();
session_destroy();
header("Location:http://localhost/MyStore/login_admin.php");
exit;
?>