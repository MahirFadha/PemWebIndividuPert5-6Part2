<?php
session_start();

$_SESSION["username"] = "MahirFadha";

if (isset($_SESSION["username"])) {
    echo "Username: " . $_SESSION["username"];
} else {
    echo "Session belum diset";
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <div class="container">
        <?php include "Layout/kiri.html" ?>
        <?php include "Layout/tengah.html" ?>
        <?php include "Layout/kanan.html" ?>
    </div>
</body>

</html>