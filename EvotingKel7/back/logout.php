<?php
// aktif session
session_destroy();

$_SESSION['error'] = "Anda telah logout";
header("Location: ../loginregist.php");