<?php
session_start();
if (isset($_COOKIE["username"])) {
    $cookies = $_COOKIE["username"];
} else {
    $cookies = "Cookies";
}

if (isset($_SESSION["username"])) {
    $sessions = $_SESSION["username"];
} else {
    $sessions = "Sessions";
}

print_r($_SESSION);
?>


<h1>Halo, <?php echo $cookies; ?> !</h1>
<h1>Halo, <?php echo $sessions; ?> !</h1>