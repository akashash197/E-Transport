<?php
session_start();
unset($_SESION['Etransport_Admin']);
session_destroy();
header("location:index.php");
?>