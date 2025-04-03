<?php
if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
} else {
    $username = "Guest";
}
?>

<h1>Halo, <?php echo $username; ?> !</h1>