<?php
session_start();
session_destroy();
header("Location: info.php");
?>
