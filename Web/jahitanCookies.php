<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $username = $_POST["username"];
    setcookie("username", $username, time() + (86400 * 2), "/");
    $_SESSION["username"] = $username;
    header("Location:home.php");
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
<?php
include "Koneksi/koneksi.php";
?>